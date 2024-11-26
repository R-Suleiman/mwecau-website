<?php

namespace App\Http\Controllers\Announcement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsUpdate;
use Illuminate\Support\Facades\File;
class AnnouncementController extends Controller
{

    public function postAnnouncementView()
    {
        return view('admin.post-announcement');
    }
    public function postAnnouncement(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'posting_date' => ['required'],
            'attachment' => ['nullable', 'file', 'max:5120', 'mimes:pdf'],
        ], [
            'name.required' => 'Please fill in title of the announcement',
            'posting_date' => 'Please Select date',
        ]);

        $newAnnouncement = new NewsUpdate();
        // File upload processing
        $attachmentName = null;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentName = pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME);
            $attachmentExtension = $attachment->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);

            $attachmentName = $attachmentName . '-' . $uniqueId . '.' . $attachmentExtension;
            $storagePath = 'documents/announcementAttachments';

            try {
                $attachment->move(public_path($storagePath), $attachmentName);
                // Save the announcement
                $newAnnouncement->name = $request->name;
                $newAnnouncement->description = $request->description;
                $newAnnouncement->posting_date = $request->posting_date;
                $newAnnouncement->attachment = $attachmentName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', "Something went wrong, failed to post announcement.");
            }
        }

        $newAnnouncement->save();

        return redirect()->back()->with('message', 'Announcement Posted Successfully');
    }
    public function announcementtsList()
    {
        $announcements = NewsUpdate::all();

        return view('admin.announcements-list', compact('announcements'));
    }
    public function announcementDetails($name)
    {
        $announcementDetails = NewsUpdate::where('name', $name)->first();
        return view('admin.announcement-details', compact('announcementDetails'));
    }
    public function editAnnouncementView($announcementsName)
    {
        $announcementDetails = NewsUpdate::where('name', $announcementsName)->first();
        return view('admin.edit-announcement', compact('announcementDetails'));
    }
    public function editAnnouncement(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'posting_date' => ['required'],
            'attachment' => ['nullable', 'file', 'max:5120', 'mimes:pdf'],
        ]);

        // Find the existing announcement
        $updatedAnnouncement = NewsUpdate::findOrFail($id);

        // Update basic information
        $updatedAnnouncement->name = $request->name;
        $updatedAnnouncement->description = $request->description;
        $updatedAnnouncement->posting_date = $request->posting_date;

        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');

            $attachmentName = pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME);
            $attachmentExtension = $attachment->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);

            $attachmentName = $attachmentName . '-' . $uniqueId . '.' . $attachmentExtension;
            $storagePath = 'documents/announcementAttachments';

            try {
                $attachment->move(public_path($storagePath), $attachmentName);

                // Delete existing attachment if it exists
                $existingAttachmentPath = public_path($storagePath . '/' . $updatedAnnouncement->attachment);
                if ($updatedAnnouncement->attachment && File::exists($existingAttachmentPath)) {
                    File::delete($existingAttachmentPath);
                }

                // Update the attachment path in the database
                $updatedAnnouncement->attachment = $attachmentName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', "{$updatedAnnouncement->name} failed to update. Please try again.");
            }
        }

        // Save all updates to the announcement
        $updatedAnnouncement->save();

        return redirect()->route('admin.dashboard')->with('message', "{$updatedAnnouncement->name} updated successfully.");
    }

    public function deleteAnnouncement($id)
    {
        $destroyAnnouncement = NewsUpdate::findOrFail($id);

        // deleting the existing announcement attachment
        $existingAttachment = public_path('/documents/announcementAttachments/' . $destroyAnnouncement->attachment);
        if (File::exists($existingAttachment)) {
            File::delete($existingAttachment);
        }

        $destroyAnnouncement->delete();
        return redirect()->back()->with('message', 'Announcement Successfully Deleted');
    }
}
