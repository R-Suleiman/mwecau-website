<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Alumni\AlumniController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\HealthService\HealthServiceController;


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

Route::get('/503', [\App\Http\Controllers\HomeController::class, 'connection_error']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

//home route
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('journals', [\App\Http\Controllers\HomeController::class, 'UniJournals'])->name('uni.journals');

Auth::routes();


//admin routes
Route::controller(AdminController::class)->prefix('admin')->middleware('admin')->group(function () {
    Route::get('dashboard',  'adminHome')->name('admin.dashboard');

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
    //announcements routes
    Route::get('/post-announcement', 'postAnnouncementView')->name('admin.post.announcement');
    Route::post('/post-announcement', 'postAnnouncement')->name('post.announcement');

    //admin programs related routes  CHECK ON THIS ROUTES
    Route::get('register-course', 'registerCourse')->name('register-course');
    Route::post('storeCourse',  'storeCourse')->name('storeCourse'); //sending to the database
    Route::get('list-of-programs',  'listOfPrograms')->name('list-of-programs');

    Route::get('programme_details/{programme_name}',  'courseDetails')->name('admin.course.details');

    Route::get('university-documents',  'documents')->name('admin.documents.pdf');
    Route::get('pdf',  'postPdfView')->name('admin.post.pdf');
    Route::post('post-pdf',  'postPdf')->name('admin.new.pdf');

    Route::get('edit-pdf',  'editDocumentView')->name('admin.edit.pdf');
    Route::put('edit-pdf',  'updatePDF')->name('admin.update.pdf');

    Route::delete('delete-pdf/{id}',  'destroyDocument')->name('admin.delete.pdf');

    Route::delete('course/{id}', 'destroy')->name('course.destroy');
    //admin staff related routes
    Route::get('register-staff', 'staffForm')->name('register-staff');
    Route::post('registerStaff', 'registerStaff')->name('registerStaff'); //sending to the database
    Route::get('list-of-staff',  'listOfStaff')->name('admin.list-of-staff');
    Route::get('staff-profile/{first_name} {last_name}', 'staffProfile')->name('staff-profiles');  //preview specific staff profile
    Route::get('edit-staff-profile/{id}', 'editStaffProfile')->name('edit.staff.profile'); //editing specific staff profile details
    Route::put('updateStaffProfile/{id}', 'updateStaffProfile')->name('admin.update.staff.profile');
    Route::delete('staff/{id}', 'destroyStaff')->name('staff.destroy');
});

// site events related routes
Route::controller(EventsController::class)->prefix('admin')->group(function () {
    Route::get('event',  'event')->middleware('admin')->name('admin.event');
    Route::post('create-event', 'createEvent')->middleware('admin')->name('admin.create.event');
    Route::get('edit-event/{id}', 'editEvent')->middleware('admin')->name('admin.edit.event');
    Route::post('update-event/{id}', 'updateEvent')->middleware('admin')->name('admin-update-event');
    Route::get('events', 'eventslist')->name('admin.events.list');
    Route::get('event-details/{id}', 'adminEventDetails')->name('admin.event-details');
    Route::post('/destroy-event/{id}', 'eventDestroty')->name('admin.destroy.event');
});

//site navigation tabs related routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('campus-life', [App\Http\Controllers\HomeController::class, 'campusLife'])->name('campus-life');
Route::get('/research', [App\Http\Controllers\HomeController::class, 'research'])->name('research');
Route::get('IT-services', [App\Http\Controllers\HomeController::class, 'itServices'])->name('IT.services');
Route::get('/library', [App\Http\Controllers\HomeController::class, 'library'])->name('library');
Route::get('academics', [App\Http\Controllers\AcademicsController::class, 'academics'])->name('academics');
Route::get('/university-events', [App\Http\Controllers\HomeController::class, 'uniEvents'])->name('university.events');
Route::get('/news/updates', [App\Http\Controllers\HomeController::class, 'newsUpdates'])->name('university.news.updates');
Route::get('/events/event-details/{id}', [App\Http\Controllers\EventsController::class, 'eventDetails'])->where('id', '.*')->name('event-details');
Route::get('/announcement-details/{announcementName}', [App\Http\Controllers\HomeController::class, 'announcementDetails'])->where('announcementName', '.*')->name('announcement-details');
//announcement attachment preview route
Route::get('/announcement-attachment/preview/{attachment}', [App\Http\Controllers\HomeController::class, 'documentPreview'])->name('announcement.attachment.preview');
//University Document preview route
Route::get('/uni-pdf-preview/{id}', [App\Http\Controllers\HomeController::class, 'UniPdfsPreview'])->name('uni-pdf-preview');
//event attachment preview route
Route::get('/event-attachment-preview/{eventFileName}', [App\Http\Controllers\HomeController::class, 'eventAttachmentPreview'])->name('event-attachment-preview');

//programs related routes
Route::controller(AcademicsController::class)->group(function () {
    Route::get('/faculties/{faculty_name}', 'faculty')->name('faculty');
    Route::get('/faculties/{faculty_name}/staff', 'staff')->name('faculty.staff');
    Route::get('/faculties/{faculty_name}/{dept_name}', 'department')->name('department');
    Route::get('/faculties/{faculty_name}/programmes/programme-list', 'departmentProgrammes')->name('department.programmes');
});
Route::controller(AcademicsController::class)->prefix('programs')->group(function () {
    Route::get('programs-list',  'programsList')->name('programs-list');
    Route::get('/{programme_category}', 'programmeCategory')->name('programmeCategory');

    // CHECK ON THIS IF SHOULD STAY
    // Route::get('undergraduate', 'underGraduate')->name('undergraduate');
    // Route::get('non-degree', 'nonDegree')->name('non-degree');

    Route::get('/{programme_category}/{programme_name}', 'showCourseDetails')->name('course_details');
    Route::get('/academics/json', 'academicsJson')->name('academics.json');
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
    Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
        Route::get('/research-details/{header}', 'resourceDetails')->name('admin.research.details');
        Route::get('/list-of-research', 'listOfResearch')->name('admin.research.list');
        Route::get('/post-reseacrh', 'postResearchView')->name('admin.post.research');
        Route::post('/new-research', 'postResearch')->name('admin.post.new.research');
        Route::get('/edit-resource/{header}', 'editresearchView')->name('admin.edit.resource');
        Route::put('/update-resource/{id}', 'updateResearch')->name('admin.udate.resource');
        Route::delete('/delete-resource/{id}', 'destroyResearch')->name('admin-destroy.resource');
    });
});

//routes for uploadind and previewing uploaded pdfs
Route::get('/upload-pdf-form', [PdfController::class, 'uploadPdfForm'])->name('pdf.upload.form');
Route::post('/upload-pdf', [PdfController::class, 'uploadPDF'])->name('pdf.upload');
// Route::get('/previewPDF/{filename}', [PdfController::class, 'previewPDF'])->name('pdf.preview');
Route::get('/pdfs/{file}', [PDFController::class, 'previewPDF'])->name('pdf.preview');


//all routes related to pdf generating using (dom pdf)
Route::get('/generate-pdf', [PDFController::class, 'generateAllPDF'])->name('all.courses.pdf');
Route::get('/generate-postgraduate-pdf', [PDFController::class, 'generatePostGraduatePDF'])->name('postgraduate.pdf');
Route::get('/generate-undergraduate-pdf', [PDFController::class, 'generateUndergraduatePDF'])->name('undergraduate.pdf');
Route::get('/generate-non-degree-pdf', [PDFController::class, 'generateAllNonDegreePDF'])->name('non-degree.pdf');


//Alumni related routes

// Route::domain('https://fos.mwecau.ac.tz/')->group(function () {
Route::controller(AlumniController::class)->group(function () {
    Route::get('alumni-home', 'index')->name('alumni.home');
});
// });

// Route::domain('https://health.mwecau.ac.tz/')->group(function () {
    Route::controller(HealthServiceController::class)->group(function () {
        Route::get('health-center', 'index')->name('health.center');
    });
    // });
