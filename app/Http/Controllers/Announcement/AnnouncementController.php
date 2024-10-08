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

        // File upload processing
        $attachmentName = null;
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentName = time() . '_' . $attachment->getClientOriginalName();
            $attachment->move(public_path('documents/announcementAttachments'), $attachmentName);
        }

        // Save the announcement
        $newAnnouncement = new NewsUpdate();
        $newAnnouncement->name = $request->name;
        $newAnnouncement->description = $request->description;
        $newAnnouncement->posting_date = $request->posting_date;
        $newAnnouncement->attachment = $attachmentName;
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
        $updatedAnnouncement = NewsUpdate::find($id);

        if (!$updatedAnnouncement) {
            return redirect()->back()->with('fail', 'Announcement not found');
        }

        $updatedAnnouncement->name = $request->name;
        $updatedAnnouncement->description = $request->description;
        $updatedAnnouncement->posting_date = $request->posting_date;

        // File upload processing
        if ($request->hasFile('attachment')) {
            // Delete the old attachment if it exists
            if ($updatedAnnouncement->attachment) {
                $oldAttachmentPath = public_path('documents/announcementAttachments/' . $updatedAnnouncement->attachment);
                if (File::exists($oldAttachmentPath)) {
                    File::delete($oldAttachmentPath);
                }
            }

            $attachment = $request->file('attachment');
            $attachmentName = time() . '_' . $attachment->getClientOriginalName();
            $attachment->move(public_path('documents/announcementAttachments'), $attachmentName);

            $updatedAnnouncement->attachment = $attachmentName;
        }

        $updatedAnnouncement->save();

        return redirect()->back()->with('message', 'Announcement updated successfully');
    }

    public function deleteAnnouncement($id)
    {
        $destroyAnnouncement = NewsUpdate::findOrFail($id);

        $destroyAnnouncement->delete();

        return redirect()->back()->with('message', 'Announcement Successfully Deleted');
    }
}
