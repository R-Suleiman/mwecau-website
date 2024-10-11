<?php

use App\Http\Controllers\Announcement\AnnouncementController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HealthService\HealthServiceController;
use App\Models\HealthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Alumni\AlumniController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\AcademicsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Auth::routes();
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'register'])->middleware(['auth', 'admin'])->name('register');

Route::controller(HomeController::class)->group(function () {
    // Route::get('/home', 'index')->name('home');
    Route::get('/503', 'connection_error');
    Route::get('/', 'index')->name('index');
    Route::get('journals', 'UniJournals')->name('uni.journals');
    Route::get('about', 'about')->name('about');
    Route::get('campus-life', 'campusLife')->name('campus-life');
    Route::get('/research', 'research')->name('research');
    Route::get('IT-services', 'itServices')->name('IT.services');
    Route::get('/library', 'library')->name('library');
    Route::get('/news/updates', 'newsUpdates')->name('university.news.updates');
    Route::get('/university-events', 'uniEvents')->name('university.events');
    Route::get('/uni-pdf-preview/{id}', 'UniPdfsPreview')->name('uni-pdf-preview');
    Route::get('/announcement-attachment/preview/{attachment}', 'documentPreview')->name('announcement.attachment.preview');
    Route::get('/announcement-details/{announcementName}', 'announcementDetails')->where('announcementName', '.*')->name('announcement-details');
    Route::get('/event-attachment-preview/{eventFileName}', 'eventAttachmentPreview')->name('event-attachment-preview');

});

Route::controller(FooterController::class)->middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/list-of-footer-items', 'show')->name('admin.footer.item.list.view');
    Route::get('/post-footer-items', 'storeFooterView')->name('admin.footer.store.view');
    Route::post('new-footer-item', 'storeFooter')->name('admin.new.footer.item');
    Route::get('edit/{name}/footer-item', 'edit')->name('admin.edit.footer.item.view');
    Route::put('new-footer-item/{id}', 'updateFooter')->name('admin.update.footer.item');
    Route::delete('/destroy-item/{id}', 'destroyFooter')->name('admin.destroy.footer.item');
});
//admin routes
Route::controller(AdminController::class)->prefix('admin')->middleware('admin')->group(function () {
    Route::get('dashboard', 'adminHome')->name('admin.dashboard');

    //webiste page management
    Route::get('manage-site-images', 'siteImage')->name('site.images');
    Route::post('manage-site-images', 'uploadPageImage')->name('upload.page.image');
    Route::get('/all-site-images', 'allSiteImages')->name('admin.all.site.images');
    Route::get('/image-update/{id}', 'changeImageView')->name('admin.update.image');
    Route::post('/change-image/{id}', 'changeImage')->name('admin.change.image');
    Route::delete('/delete-image/{id}', 'deleteImage')->name('admin.delete.image');
    //uni Statistics routes
    Route::get('/uni-statistics', 'statistics')->name('admin.statistics');
    Route::post('/post-statistic', 'postStatistics')->name('admin.post.statistic');

    //admin programs related routes  CHECK ON THIS ROUTES
    Route::get('programme_details/{programme_name}', 'courseDetails')->name('admin.course.details');
    //admin staff related routes
    Route::get('staff-profile/{first_name} {last_name}', 'staffProfile')->name('staff-profiles');  //preview specific staff profile
    Route::get('edit-staff-profile/{id}', 'editStaffProfile')->name('edit.staff.profile'); //editing specific staff profile details
    Route::put('updateStaffProfile/{id}', 'updateStaffProfile')->name('admin.update.staff.profile');
    Route::delete('staff/{id}', 'destroyStaff')->name('staff.destroy');
});

// Event related routes
Route::controller(EventsController::class)->group(function () {
    Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
        //only for admin
        Route::get('event', 'event')->name('admin.event');
        Route::post('create-event', 'createEvent')->name('admin.create.event');
        Route::get('edit-event/{id}', 'editEvent')->name('admin.edit.event');
        Route::post('update-event/{id}', 'updateEvent')->name('admin-update-event');
        Route::get('events', 'eventslist')->name('admin.events.list');
        Route::get('event-details/{id}', 'adminEventDetails')->name('admin.event-details');
        Route::post('/destroy-event/{id}', 'eventDestroty')->name('admin.destroy.event');
    });
    //web view event routes
    Route::get('/events/event-details/{id}', 'eventDetails')->where('id', '.*')->name('event-details');
});

//News and updates related routes
Route::controller(AnnouncementController::class)->group(function () {
    //for admin
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/post-announcement', 'postAnnouncementView')->name('admin.post.announcement');
        Route::post('/post-announcement', 'postAnnouncement')->name('post.announcement');
        Route::get('/about/{name}/announcement', 'announcementDetails')->name('admin.announcement.details');
        //editing announcements
        Route::get('/news-updates', 'announcementtsList')->name('admin.announcement.list');
        Route::get('/edit/{name}/announcement', 'editAnnouncementView')->name('admin.edit.announcement');
        Route::put('/edit-announcement/{id}', 'editAnnouncement')->name('admin.update.announcement');
        Route::delete('delete-announcement/{id}', 'deleteAnnouncement')->name(name: 'admin.destroy.annoucement');
    });
});
//managing about page admin
Route::controller(AboutController::class)->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/about', 'postAboutView')->name('admin.about');
    Route::get('/edit-about/{id}', 'updateAboutView')->name('admin.edit.about');
    Route::put('/update-about/{id}', 'updateAbout')->name('admin.update.about');
    Route::delete('/destroy-about', 'deleteAbout')->name('admin.destroy.about');
});

Route::get('academics', [App\Http\Controllers\AcademicsController::class, 'academics'])->name('academics');
//programs related routes
Route::controller(AcademicsController::class)->group(function () {
    Route::get('/faculties/{faculty_name}', 'faculty')->name('faculty');
    Route::get('/faculties/{faculty_name}/staff', 'staff')->name('faculty.staff');
    Route::get('/faculties/{faculty_name}/{dept_name}', 'department')->name('department');
    Route::get('/faculties/{faculty_name}/programmes/programme-list', 'departmentProgrammes')->name('department.programmes');

    Route::prefix('programs')->group(function () {
        Route::get('programs-list', 'programsList')->name('programs-list');
        Route::get('/{programme_category}', 'programmeCategory')->name('programmeCategory');

        Route::get('/{programme_category}/{programme_name}', 'showCourseDetails')->name('course_details');
        Route::get('/academics/json', 'academicsJson')->name('academics.json');
    });
});

Route::controller(AboutController::class)->prefix('admin')->group(function () {
    Route::get('/about', 'postAboutView')->name('admin.about');
    Route::get('/edit-about/{id}', 'updateAboutView')->name('admin.edit.about');
    Route::put('/update-about/{id}', 'updateAbout')->name('admin.update.about');
    Route::delete('/destroy-about', 'deleteAbout')->name('admin.destroy.about');
});

//staff related routes
Route::get('/administrative-unit', [\App\Http\Controllers\StaffController::class, 'administrativeUnit'])->name('administrative-unit');
Route::get('/mwecau-administrative-staff', [\App\Http\Controllers\StaffController::class, 'administrativeStaff'])->name('mwecau-administrative-staff');
Route::get('/mwecau-academic-staff', [\App\Http\Controllers\StaffController::class, 'academicStaff'])->name('mwecau-academic-staff');
Route::get('/staff/{first_name} {last_name}', [\App\Http\Controllers\StaffController::class, 'staffProfile'])->name('staff-profile');

Route::controller(ResearchController::class)->group(function () {
    Route::get('/projects', 'research')->name('projects');
    Route::get('/resource-details/{header}', 'researchDetails')->where('header', '.*')->name('research.project.details');
    Route::get('/outreach-programs', 'outreach')->name('outreach');
    Route::get('/outreach-details/{header}', 'outreachDetails')->name('research.outreach.details');
    //routes accessible by admin only
    Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
        Route::get('/research-details/{header}', 'resourceDetails')->where('header', '.*')->name('admin.research.details');
        Route::get('/list-of-research', 'listOfResearch')->name('admin.research.list');
        Route::get('/post-reseacrh', 'postResearchView')->name('admin.post.research');
        Route::post('/new-research', 'postResearch')->name('admin.post.new.research');
        Route::get('/edit-resource/{header}', 'editresearchView')->name('admin.edit.resource');
        Route::put('/update-resource/{id}', 'updateResearch')->name('admin.udate.resource');
        Route::delete('/delete-resource/{id}', 'destroyResearch')->name('admin-destroy.resource');
    });
});

//HERE SHOULD TEST PDF GENERATE FROM UMS
Route::controller(PdfController::class)->group(function () {
    Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
        Route::get('university-documents', 'documents')->name('admin.documents.pdf');
        Route::get('pdf', 'postPdfView')->name('admin.post.pdf');
        Route::post('post-pdf', 'postPdf')->name('admin.new.pdf');
        Route::get('edit-pdf', 'editDocumentView')->name('admin.edit.pdf');
        Route::put('edit-pdf', 'updatePDF')->name('admin.update.pdf');
        Route::delete('delete-pdf/{id}', 'destroyDocument')->name('admin.delete.pdf');
    });
    //Generating PDF
    // Route::get('/generate-pdf', 'generateAllPDF')->name('all.courses.pdf');
    // Route::get('/generate-postgraduate-pdf', 'generatePostGraduatePDF')->name('postgraduate.pdf');
    // Route::get('/generate-undergraduate-pdf', 'generateUndergraduatePDF')->name('undergraduate.pdf');
    // Route::get('/generate-non-degree-pdf', 'generateAllNonDegreePDF')->name('non-degree.pdf');

});

//Alumni related routes
// Route::domain('https://fos.mwecau.ac.tz/')->group(function () {
Route::controller(AlumniController::class)->group(function () {
    Route::get('alumni-home', 'index')->name('alumni.home');
});
// });

// Route::domain('https://health.mwecau.ac.tz/')->group(function () {
Route::controller(HealthServiceController::class)->group(function () {
    Route::get('health-center', 'index')->name('health.center');
    Route::get('about-us', 'aboutUs')->name('health-center-about-us');
    Route::get('department', 'department')->name('health-center-department');
    Route::get('service', 'service')->name('health-center-service');
    Route::get('services', 'services')->name('health-center-services');
});
// });
