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
        return view('admin.announcements.post-announcement');
    }
    public function postAnnouncement(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['nullable'],
            'posting_date' => ['required'],
            'thumbnail' => ['max:2048', 'nullable', 'image'],
            'attachment' => ['nullable', 'file', 'max:5120', 'mimes:pdf'],
        ], [
            'name.required' => 'Please fill in the title of the announcement',
            'posting_date.required' => 'Please select a date',
        ]);

        // Process the thumbnail upload
        $thumbnailFileName = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailOriginalFileName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
            $thumbnailFileExtension = $thumbnail->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $thumbnailFileName = $thumbnailOriginalFileName . '-' . $uniqueId . '.' . $thumbnailFileExtension;
            $storagePath = 'images/announcementImages';

            try {
                $thumbnail->move(public_path($storagePath), $thumbnailFileName);
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', "Something went wrong, failed to upload the announcement thumbnail.");
            }
        }

        // Initialize announcement
        $newAnnouncement = new NewsUpdate();
        $attachmentName = null;

        // Process the attachment upload
        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $attachmentOriginalName = pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME);
            $attachmentExtension = $attachment->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $attachmentName = $attachmentOriginalName . '-' . $uniqueId . '.' . $attachmentExtension;
            $storagePath = 'documents/announcementAttachments';

            try {
                $attachment->move(public_path($storagePath), $attachmentName);
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', "Something went wrong, failed to upload the announcement attachment.");
            }
        }

        $newAnnouncement->name = $request->name;
        $newAnnouncement->description = $request->description;
        $newAnnouncement->posting_date = $request->posting_date;
        $newAnnouncement->attachment = $attachmentName;
        $newAnnouncement->thumbnail = $thumbnailFileName;

        $newAnnouncement->save();

        return redirect()->back()->with('message', 'Announcement Posted Successfully');
    }

    public function announcementtsList()
    {
        $announcements = NewsUpdate::orderBy('created_at', 'desc')->get();

        return view('admin.announcements.announcements-list', compact('announcements'));
    }
    public function announcementDetails($name)
    {
        $announcementDetails = NewsUpdate::where('name', $name)->first();
        return view('admin.announcements.announcement-details', compact('announcementDetails'));
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
            'thumbnail' => ['max:2048', 'nullable', 'image'],
            'attachment' => ['nullable', 'file', 'max:5120', 'mimes:pdf'],
        ]);

        // Find the existing announcement
        $updatedAnnouncement = NewsUpdate::findOrFail($id);

        // Announcement thumbnail processing
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailOriginalFileName = pathinfo($thumbnail->getClientOriginalName(), PATHINFO_FILENAME);
            $thumbnailFileExtension = $thumbnail->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $thumbnailFileName = $thumbnailOriginalFileName . '-' . $uniqueId . '.' . $thumbnailFileExtension;
            $storagePath = 'images/announcementImages';

            try {
                $thumbnail->move(public_path($storagePath), $thumbnailFileName);

                // Delete existing thumbnail if it exists
                if ($updatedAnnouncement->thumbnail) {
                    $existingThumbnailPath = public_path($storagePath . '/' . $updatedAnnouncement->thumbnail);
                    if (File::exists($existingThumbnailPath)) {
                        File::delete($existingThumbnailPath);
                    }
                }

                $updatedAnnouncement->thumbnail = $thumbnailFileName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', "{$updatedAnnouncement->name} failed to update. Please try again.");
            }
        }

        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');

            $attachmentName = pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME);
            $attachmentExtension = $attachment->getClientOriginalExtension();
            $uniqueId = substr(uniqid(), 0, 4);
            $attachmentFileName = $attachmentName . '-' . $uniqueId . '.' . $attachmentExtension;
            $storagePath = 'documents/announcementAttachments';

            try {
                $attachment->move(public_path($storagePath), $attachmentFileName);

                // Delete existing attachment if it exists
                if ($updatedAnnouncement->attachment) {
                    $existingAttachmentPath = public_path($storagePath . '/' . $updatedAnnouncement->attachment);
                    if (File::exists($existingAttachmentPath)) {
                        File::delete($existingAttachmentPath);
                    }
                }
                $updatedAnnouncement->attachment = $attachmentFileName;
            } catch (\Exception $e) {
                return redirect()->back()->with('fail', "{$updatedAnnouncement->name} failed to update. Please try again.");
            }
        }
        $updatedAnnouncement->name = $request->name;
        $updatedAnnouncement->description = $request->description;
        $updatedAnnouncement->posting_date = $request->posting_date;

        // Save the updated announcement
        $updatedAnnouncement->save();

        return redirect()->route('admin.dashboard')->with('message', "{$updatedAnnouncement->name} updated successfully.");
    }

    public function deleteAnnouncement($id)
    {
        $destroyAnnouncement = NewsUpdate::findOrFail($id);

        // deleting the existing announcement thumbnail
        $thumbnailPath = public_path('images/announcementImages/' . $destroyAnnouncement->thumbnail);
        if (File::exists($thumbnailPath)) {
            File::delete($thumbnailPath);
        }

        // deleting the existing announcement attachment
        $existingAttachment = public_path('/documents/announcementAttachments/' . $destroyAnnouncement->attachment);
        if (File::exists($existingAttachment)) {
            File::delete($existingAttachment);
        }

        $destroyAnnouncement->delete();
        return redirect()->back()->with('message', 'Announcement Successfully Deleted');
    }
}
