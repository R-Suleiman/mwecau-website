<?php

use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');

//home route
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('icons', [\App\Http\Controllers\HomeController::class, 'icons'])->name('icons');

Auth::routes();


//admin routes
Route::controller(AdminController::class)->prefix('admin')->middleware('admin')->group(function () {
    Route::get('dashboard',  'adminHome')->name('admin.dashboard');

    //admin programs related routes
    Route::get('register-course', 'registerCourse')->name('register-course');
    Route::post('storeCourse',  'storeCourse')->name('storeCourse'); //sending to the database
    Route::get('list-of-programs',  'listOfPrograms')->name('list-of-programs');
    Route::get('course_details/{id}',  'courseDetails')->name('admin.course.details');
    Route::get('course_update_form/{id}',  'courseUpdateForm')->name('admin.course_update_form');
    Route::put('updateCourseDetails/{id}',  'updateCourseDetails')->name('admin.update.course');
    Route::delete('course/{id}', 'destroy')->name('course.destroy');
    //admin staff related routes
    Route::get('register-staff', 'staffForm')->name('register-staff');
    Route::post('registerStaff', 'registerStaff')->name('registerStaff'); //sending to the database
    Route::get('list-of-staff',  'listOfStaff')->name('admin.list-of-staff');
    Route::get('staff-profile\{id}', 'staffProfile')->name('staff-profile');  //preview specific staff profile
    Route::get('edit-staff-profile/{id}', 'editStaffProfile')->name('edit.staff.profile'); //editing specific staff profile details
    Route::put('updateStaffProfile/{id}', 'updateStaffProfile')->name('admin.update.staff.profile');
    Route::delete('staff/{id}', 'destroyStaff')->name('staff.destroy');
});

// site events related routes
Route::controller(EventsController::class)->prefix('admin')->group(function () {
    Route::get('event',  'event')->middleware('admin')->name('admin.event');
    Route::post('create-event', 'createEvent')->middleware('admin')->name('admin.create.event');
    Route::get('edit-event/{id}', 'editEvent')->middleware('admin')->name('admin.edit.event');
    Route::put('update-event', 'updateEvent')->middleware('admin')->name('admin-update-event');
    Route::get('events', 'eventslist')->name('admin.events.list');
    Route::get('event-details/{id}', 'adminEventDetails')->name('admin.event-details');
});

//site navigation tabs related routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('campus-life', [App\Http\Controllers\HomeController::class, 'campusLife'])->name('campus-life');
Route::get('academics', [App\Http\Controllers\AcademicsController::class, 'academics'])->name('academics');
Route::get('/events/event-details/{id}', [App\Http\Controllers\EventsController::class, 'eventDetails'])->name('event-details');

//programs related routes
Route::controller(AcademicsController::class)->prefix('programs')->group(function () {
    Route::get('programs-list',  'programsList')->name('programs-list');
    Route::get('post-graduate', 'postGraduate')->name('post-graduate');
    Route::get('undergraduate', 'underGraduate')->name('undergraduate');
    Route::get('non-degree', 'nonDegree')->name('non-degree');
    Route::get('course_details=\OEmldndkfVhdjavddh{id}', 'showCourseDetails')->name('course_details');
});

//staff related routes
Route::get('mwecau-staff', [\App\Http\Controllers\StaffController::class, 'staff'])->name('mwecau-staffs');
Route::get('mwecau-staff-profile=\hd8GkGOEmldndkfVhdjavddhgcsFsjsaid\{id}\MbWvk', [\App\Http\Controllers\StaffController::class, 'staffProfile'])->name('mwecau-staff-profile');


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
