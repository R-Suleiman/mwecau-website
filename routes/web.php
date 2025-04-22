<?php

use App\Http\Controllers\Announcement\AnnouncementController;
use App\Http\Controllers\dpric\ClubActivityController;
use App\Http\Controllers\dpric\ClubGalleryController;
use App\Http\Controllers\dpric\ClubLeaderController;
use App\Http\Controllers\dpric\InnovationProjectController;
use App\Http\Controllers\dpric\InnovationProjectGalleryController;
use App\Http\Controllers\dpric\DpricContentController;
use App\Http\Controllers\dpric\DpricManagementController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HealthService\HealthCenterAdminController;
use App\Http\Controllers\HealthService\HealthCenterController;
use App\Http\Controllers\HealthService\HealthCenterDepartmentController;
use App\Http\Controllers\HealthService\HealthCenterDoctorsController;
use App\Http\Controllers\HealthService\HealthCenterNewsEventController;
use App\Http\Controllers\HealthService\HealthCenterServiceController;
use App\Http\Controllers\HealthService\HealthCenterTestimonialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HealthService\HealthServiceController;
use App\Http\Controllers\Libray\LibraryController;
use App\Http\Controllers\Project\AdminProjectController;
use App\Http\Controllers\Project\AdminProjectPublicationController;
use App\Http\Controllers\Project\AdminProjectScholarshipController;
use App\Http\Controllers\Project\AdminProjectTeamController;
use App\Http\Controllers\Project\AdminProjectTestimonialController;
use App\Http\Controllers\Project\ProjectAdminConferenceController;
use App\Http\Controllers\Project\ProjectsController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\WebAdminsController;
use App\Models\HealthCenterNewsEvent;
use App\Models\HealthService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Alumni\AlumniController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\dpric\DpricController;
use App\Http\Controllers\dpric\DpricAdminController;
use App\Http\Controllers\dpric\NewsController;
use App\Http\Controllers\dpric\UnitsController;
use App\Http\Controllers\dpric\AwardsController;
use App\Http\Controllers\dpric\DocumentsController;
use App\Http\Controllers\dpric\ImagesController;
use App\Http\Controllers\dpric\ClubController;
use Illuminate\Support\Facades\Storage;
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


Route::get('/depts', [App\Http\Controllers\AboutController::class, 'getDepartments'])->name('getUms3');

Auth::routes();
Route::get('/login', function () {
    abort(404); // aborting default login route
});

// The GET route to return login form
Route::get('/auth/admin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
// Define the POST route for the login submission
Route::post('/auth/admin', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/admin-registration', [App\Http\Controllers\HomeController::class, 'register'])->name('admin-registration');

Route::controller(HomeController::class)->group(function () {
    // Route::get('/home', 'index')->name('home');
    Route::get('/503', 'connection_error');
    Route::get('/', 'index')->name('index');
    Route::get('journals', 'UniJournals')->name('uni.journals');
    Route::get('about', 'about')->name('about');
    Route::get('campus-life', 'campusLife')->name('campus-life');
    Route::get('/research', 'research')->name('research');
    Route::get('IT-services', 'itServices')->name('IT.services');
    // Route::get('/library', 'library')->name('library');
    Route::get('/gallery', 'gallery')->name('university.gallery');
    Route::get('/news/updates', 'newsUpdates')->name('university.news.updates');
    Route::get('/university-events', 'uniEvents')->name('university.events');
    Route::get('/uni-pdf-preview/{id}', 'UniPdfsPreview')->name('uni-pdf-preview');
    Route::get('/announcement-attachment/preview/{attachment}', 'documentPreview')->name('announcement.attachment.preview');
    Route::get('/announcement-details/{announcementName}', 'announcementDetails')->where('announcementName', '.*')->name('announcement-details');
    Route::get('/event-attachment-preview/{eventFileName}', 'eventAttachmentPreview')->name('event-attachment-preview');

});

// Gallery
Route::controller(GalleryController::class)->group(function () {
    Route::get('/gallery', 'gallery')->name('university.gallery');
    Route::get('/gallery/single/{id}', 'singleGallery')->name('university.single-gallery');

    Route::middleware(['auth', 'admin'])->name('admin.gallery.')->prefix('admin/gallery/')->group(function () {
        Route::get('create', 'create')->name('create'); // create gallery
        Route::post('store', 'store')->name('store');

        Route::get('add-images-to-gallery/{gallery_id}', 'addImagesToGallery')->name('add-images-to-gallery');
        Route::post('add-collection-to-gallery', 'galleryCollection')->name('gallery-collection');
        Route::get('galleries', 'showGallery')->name('show-gallery');

        Route::get('{id}/images', 'getGalleryImages'); //gallery images

    });
});

Route::controller(FooterController::class)->middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/list-of-footer-items', 'show')->name('footer.item.list.view');
    Route::get('/post-footer-items', 'storeFooterView')->name('footer.store.view');
    Route::post('new-footer-item', 'storeFooter')->name('new.footer.item');
    Route::get('edit/{name}/footer-item', 'edit')->name('edit.footer.item.view');
    Route::put('new-footer-item/{id}', 'updateFooter')->name('update.footer.item');
    Route::delete('/destroy-item/{id}', 'destroyFooter')->name('destroy.footer.item');
});
//admin routes
Route::controller(AdminController::class)->prefix('admin')->middleware('admin')->group(function () {
    Route::get('dashboard', 'adminHome')->name('admin.dashboard');
    Route::get('all-images', 'allImages')->name('all-images');
    //webiste page management
    Route::get('/manage-site-images', 'siteImage')->name('site.images');
    Route::post('/upload-site-images', 'uploadPageImage')->name('upload.page.image');
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

//user management
Route::controller(WebAdminsController::class)->prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    Route::get('manage-web-admins', 'webAdmins')->name('web');
    Route::get('new-web-admin', 'newWebAdmin')->name('new-web-admin');
    Route::post('new-web-admin', 'storeWebAdmin')->name('store-web-admin');
    Route::get('update/{name}/profile', 'editWebAdmin')->name('edit-web-admin');
    Route::put('update-web-admin/{id}', 'updateWebAdmin')->name('update-web-admin');
    Route::delete('destroy-web-admin/{id}', 'destroyWebAdmin')->name('destroy-web-admin');
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
        Route::post('/destroy-event/{id}', 'eventDestroy')->name('admin.destroy.event');
    });
    //web view event routes
    Route::get('{eventName}/event', 'eventDetails')->where('id', '.*')->name('event-details');
});

//News and updates related routes
Route::controller(AnnouncementController::class)->group(function () {
    //for admin
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/post-announcement', 'postAnnouncementView')->name('admin.post.announcement');
        Route::post('/post-announcement', 'postAnnouncement')->name('post.announcement');
        Route::get('/about/{name}/announcement', 'announcementDetails')->where('name', '.*')->name('admin.announcement.details');
        //editing announcements
        Route::get('/news-updates', 'announcementtsList')->name('admin.announcement.list');
        Route::get('/edit/{name}/announcement', 'editAnnouncementView')->where('name', '.*')->name('admin.edit.announcement');
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
    Route::middleware(['auth', 'research'])->prefix('admin')->group(function () {
        Route::get('/research-details/{header}', 'resourceDetails')->where('header', '.*')->name('admin.research.details');
        Route::get('/list-of-research', 'listOfResearch')->name('admin.research.list');
        Route::get('/post-reseacrh', 'postResearchView')->name('admin.post.research');
        Route::post('/new-research', 'postResearch')->name('admin.post.new.research');
        Route::get('/edit-resource/{header}', 'editresearchView')->name('admin.edit.resource');
        Route::put('/update-resource/{id}', 'updateResearch')->name('admin.udate.resource');
        Route::delete('/delete-resource/{id}', 'destroyResearch')->name('admin-destroy.resource');
    });
});

//library related routes
Route::controller(LibraryController::class)->group(function () {
    Route::get('/library', 'index')->name('library');

    Route::name('admin.library.')->prefix('admin/library')->middleware(['library'])->group(function () {
        Route::get('/', 'show')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{itemName}', 'edit')->name('edit');
        Route::put('/update/{id}', 'update')->name('update');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });
});


//HERE SHOULD TEST PDF GENERATE FROM UMS
Route::controller(PdfController::class)->group(function () {
    Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
        Route::get('university-documents', 'documents')->name('admin.documents.pdf');
        Route::get('pdf', 'postPdfView')->name('admin.post.pdf');
        Route::post('post-pdf', 'postPdf')->name('admin.new.pdf');
        Route::get('edit-pdf/{id}', 'edit')->name('admin.edit.pdf');
        Route::put('update-pdf/{id}', 'update')->name('admin.update.pdf');
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

//HEALTH CENTER RELATED ROUTES
// Route::domain('https://health.mwecau.ac.tz/')->group(function () {
Route::controller(HealthCenterController::class)->name('health-center.')->group(function () {
    Route::get('/health-center', 'index')->name('index');
    Route::get('about-us', 'aboutUs')->name('about-us');
    Route::get('/departments', 'healthCenterDepartment')->name('departments.web');
    Route::get('department/{name}', 'department')->name('department');
    Route::get('/health-center/services', 'services')->name('services');
    Route::get('/services/{name}', 'service')->where('name', '.*')->name('service');
    Route::get('/health-center/events', 'events')->name('events');
    Route::get('/health-center/events/{eventName}', 'viewEvent')->name('view-event');
});


// Health Center Admin Routes
Route::prefix('admin/health-center/')->middleware(['health-center'])->name('health-center.')->group(function () {
    Route::controller(HealthCenterAdminController::class)->group(function () {
        Route::get('dashboard', 'healthCenterDashboard')->name('dashboard');
    });

    // health center admin departments routes
    Route::controller(HealthCenterDepartmentController::class)->group(function () {
        Route::get('departments', 'departments')->name('departments');
        Route::get('create-department', 'createDepartment')->name('create-department');
        Route::post('store-department', 'storeDepartment')->name('store-department');
        Route::get('edit/{name}/department', 'editDepartment')->name('edit-department');
        Route::put('update-department/{id}', 'updateDepartment')->name('update-department');
        Route::delete('destroy-department/{id}', 'destroyDepartment')->name('destroy-department');
    });

    // health center admin services routes
    Route::controller(HealthCenterServiceController::class)->group(function () {
        Route::get('healthCenterServices', 'services')->name('healthservices');
        Route::get('new-service', 'createService')->name('create-service');
        Route::post('store-service', 'storeService')->name('store-service');
        Route::get('edit/{name}/service', 'editService')->where('name', '.*')->name('edit-service');
        Route::put('service/{id}', 'updateService')->name('update-service');
        Route::delete('destroy-service/{id}', 'destroyService')->name('destroy-service');
    });

    // health center admin doctors routes
    Route::controller(HealthCenterDoctorsController::class)->group(function () {
        Route::get('doctors', 'doctors')->name('doctors');
        Route::get('add-doctor', 'createDoctor')->name('create-doctor');
        Route::post('store-doctor', 'storeDoctor')->name('store-doctor');
        Route::get('edit/{name}/doctor', 'editDoctor')->where('name', '.*')->name('edit-doctor');
        Route::put('update-doctor/{id}', 'updateDoctor')->name('update-doctor');
        Route::delete('destroy-doctor/{id}', 'destroyDoctor')->name('destroy-doctor');
    });


    // health center news/events routes
    Route::controller(HealthCenterNewsEventController::class)->group(function () {
        Route::get('news-events', 'newsEvents')->name('news-events');
        Route::get('create-news-event', 'createNewsEvent')->name('create-news-event');
        Route::post('store-news-event', 'storeNewsEvent')->name('store-news-event');
        Route::get('edit/{name}/news-event', 'editNewsEvent')->name('edit-news-event');
        Route::put('news-event/{id}', 'updateNewsEvent')->name('update-news-event');
        Route::delete('destroy-news-event/{id}', 'destroyNewsEvent')->name('destroy-news-event');
    });

    // health center admin testimonials routes
    Route::controller(HealthCenterTestimonialController::class)->group(function () {
        Route::get('testimonials', 'testimonials')->name('testimonials');
        Route::get('publish-testimonial', 'createTestimonial')->name('create-testimonial');
        Route::post('store-testimonial', 'storeTestimonial')->name('store-testimonial');
        Route::get('edit/{name}/testimonial', 'editTestimonial')->name('edit-testimonial');
        Route::put('testimonial/{id}', 'updateTestimonial')->name('update-testimonial');
        Route::delete('destroy-testimonial/{id}', 'destroyTestimonial')->name('destroy-testimonial');
    });
});
// });

//PROJECTS RELATED ROUTES
// Route::domain('htts://projects.mwecau.ac.tz')->group(function () {
Route::controller(ProjectsController::class)->group(function () {
    Route::get('/projects-pro', 'index')->name('project.index');
    Route::get('/projects-list', 'projects')->name('projects-list');
    Route::get('/project/{projectName}', 'project')->where('projectName', '.*')->name('single-project');
    Route::get('/projects/researchers', 'researchers')->name('project-researchers');
    Route::get('capacity-building', 'capacityBuilding')->name('project-capacity-building');
    Route::get('network-and-partnership', 'networkPartnership')->name('project-network-partnership');
    Route::get('projects/publications', 'publications')->name('projects-publications');
    Route::get('about/{name}', 'projectTeamMemberDetails')->where('name', '.*')->name('tema-member-profile-description');
    Route::get('project-team-members', 'projectTeamMembers')->name('project-team-members');
    Route::get('/projects/contacts', 'contacts')->name('projects-contacts');
    Route::get('/projects/scholarships', 'scholarships')->name('projects-scholarships');
    Route::get('/Conferences', 'conferences')->name('project-conferences');
    Route::get('/about-{conferenceName}', 'conferenceDetails')->where('conferenceName', '.*')->name('about-conference');
    Route::get('/projects/livinglab', 'livingLab')->name('project-livinglab');
    Route::get('{attachment}', 'conferencePdfPreview')->name('conference-attachment-preview');
});
// });

// Research and Consultancy Routes
Route::middleware(['research'])->group(function () {
    Route::controller(AdminProjectController::class)->prefix('admin/projects/')->name('admin.project.')->group(function () {
        Route::get('', 'index')->name('index');
        // project admin related routes
        Route::get('projects', 'projects')->name('projects');
        Route::get('create', 'createProject')->name('create');
        Route::post('store', 'storeProject')->name('store');
        Route::get('edit/{projectName}/project', 'edit')->where('projectName', '.*')->name('edit');
        Route::put('update-project/{id}', 'updateProject')->name('update-project');
        //removing image from project gallery
        Route::delete('remove-gallery-image/{id}', 'removeGalleryImage')->name('remove-gallery-image');
        Route::get('{projectName}/details', 'projectDatails')->where('projectName', '.*')->name('details');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
        //team related routed
        Route::get('team', 'team')->name('team');

        // gallery creation relatd routes
        Route::get('create-gallery-for/{projectName}', 'createGallery')->name('create-gallery');
        Route::post('store-project-gallery', 'storeProjectGallery')->name('store-project-gallery');

        //project page contents routes
        Route::get('home-slider-content', 'newContent')->name('new-content');
        Route::post('store-home-slider-content', 'storeHomeSliderContent')->name('store-home-item');
        Route::get('edit/{id}/section', 'editPageSection')->name('edit-page-section');
        Route::put('content-update/{id}', 'updatePageSection')->name('update-page-section');
        Route::delete('destroy-slider/{id}', 'destroyHomeContent')->name('delete-home-slider');

        //project partners routes
        Route::get('project-partners', 'partners')->name('partners');
        Route::post('store-project-partner', 'storeProjectPartner')->name('store-project-partner');
        Route::get('edit/{partnerName}', 'editPartner')->where('partnerName', '.*')->name('edit-project-partner');
        Route::put('update/{id}', 'updateProjectPartner')->name('update-project-partner');
        Route::delete('partner/{id}', 'destroyProjectPartner')->name('destroy-project-partner');
    });

    // project admin project team routes
    Route::controller(AdminProjectTeamController::class)->prefix('admin/team/')->name('admin.project.team.')->group(function () {
        Route::get('team-members', 'index')->name('index');
        Route::get('add-members', 'create')->name('create');
        Route::post('store-team-member', 'store')->name('store');
        Route::get('edit/{name}/profile', 'edit')->name('edit');
        Route::put('update/{id}', 'update')->name('update');
        Route::get('{name}/profile', 'memberProfile')->where('name', '.*')->name('member-profile');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
        Route::post('/assign-project', 'assignProject')->name('assignProject');
    });

    //project admin conference routes
    Route::controller(ProjectAdminConferenceController::class)->prefix('admin/conference/')->name('admin.project.conference.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{name}/conference', 'edit')->name('edit');
        Route::put('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');

    });

    // Project publications controller
    Route::controller(AdminProjectPublicationController::class)->prefix('admin/publications')->name('admin.project.publication.')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{title}', 'edit')->name('edit');
        Route::put('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });

    //project admin scholarship routes
    Route::controller(AdminProjectScholarshipController::class)->prefix('admin/scholarship/')->name('admin.project.scholarship.')->group(function () {
        Route::get('project-scholarships', 'scholarships')->name('scholarships');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{scholarshipName}/scholarship', 'edit')->where('scholarshipName', '.*')->name('edit');
        Route::put('update/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');

        // Project Scholarship beneficiary routes
        Route::get('add/{name}/beneficiary', 'createScholarshipBeneficiary')->where('name', '.*')->name('create-project-beneficiary');
        Route::post('store-project-beneficiary', 'storeScholarshipBeneficiary')->name('store-project-beneficiary');
        Route::get('add/{name}/to-project', 'scholarshipToProject')->where('name', '.*')->name('scholarship-to-project');
        Route::post('store-scholarship-to-project/{id}', 'storeScholarshipToProject')->name('store-scholarship-to-project');
        Route::delete('destroy-beneficiary/{id}', 'destroyBeneficiary')->name('destroy-beneficiary');
        // editing beneficiary
        Route::get('project-scholarship-beneficiary/{name}', 'editprojectScholarshipBeneficiary')->where('name', '.*')->name('edit-project-scholarship-beneficiary');
        Route::put('update-project-scholarship-beneficiary/{id}', 'updateProjectScholarshipBeneficiary')->name('update-project-scholarship-beneficiary');
    });

    //project admin testimonial routes
    Route::controller(AdminProjectTestimonialController::class)->prefix('admin/testimonial/')->name('admin.project.testimonial.')->group(function () {
        Route::get('testimonials', 'testimonials')->name('testimonials');
        Route::get('post-testimonial', 'createTestimonial')->name('create-testimonial');
        Route::post('store-testimonial', 'storeTestimonial')->name('store-testimonial');
        Route::get('about/{testifierName}', 'aboutTestimonial')->where('testifierName', '.*')->name('about-testimonial');
        Route::get('edit/{testimonialName}/testimonial', 'editTestimonial')->where('testimonialName', '.*')->name('edit-testimonial');
        Route::put('update/{id}', 'updateTestimonial')->name('update-testimonial');
        Route::delete('destroy/{id}', 'destroyTestimonial')->name('destroy-testimonial');

    });
});
// });


// DPRIC
Route::controller(DpricController::class)->prefix('dpric/')->name('dpric.')->group(function () {
    Route::get('home', 'index')->name('index');
    Route::get('welcome-message', 'welcomeMessage')->name('welcome-message');
    Route::get('directorate-management', 'directorateManagement')->name('directorate-management');
    Route::get('directorate-programmes', 'directorateProgrammes')->name('directorate-programmes');
    Route::get('application-procedures', 'applicationProcedures')->name('application-procedures');
    Route::get('joining-instruction', 'joiningInstruction')->name('joining-instruction');
    Route::get('student-forms', 'studentForms')->name('student-forms');
    Route::get('documents/{document}', 'viewDocument')->name('view-document');
    Route::get('research-projects', 'researchProjects')->name('research-projects');
    Route::get('research-policies', 'researchPolicies')->name('research-policies');
    Route::get('research-guidelines', 'researchGuidelines')->name('research-guidelines');
    Route::get('report-research-progress', 'reportResearchProgress')->name('report-research-progress');
    Route::get('research-opportunities', 'researchOpportunities')->name('research-opportunities');
    Route::get('research-awards', 'researchAwards')->name('research-awards');
    Route::get('partner-with-us', 'partnerWithUs')->name('partner-with-us');
    Route::get('journals', 'journals')->name('journals');
    Route::get('conference-proceedings', 'conferenceProceedings')->name('conference-proceedings');
    Route::get('innovations-hub', 'innovationsHub')->name('innovations-hub');
    Route::get('innovations-hub/projects', 'innovationsProjects')->name('innovations-projects');
    Route::get('innovations-hub/projects/{project_title}', 'innovationsProject')->name('innovations-project');
    Route::get('innovations-hub/clubs', 'innovationsClubs')->name('innovations-clubs');
    Route::get('innovations-hub/clubs/{club_name}', 'innovationsClub')->name('innovations-club');
    Route::get('innovations-hub/clubs/{club_name}/projects', 'innovationsClubProjects')->name('innovations-club-projects');
    Route::get('tcce', 'tcce')->name('tcce');
    Route::get('consultancy-policy-and-guidelines', 'consultancyPolicyAndGuidelines')->name('consultancy-policy-and-guidelines');
    Route::get('policies', 'policies')->name('policies');
    Route::get('regulations-and-guidelines', 'regulationsAndGuidelines')->name('regulations-and-guidelines');
    Route::get('news', 'news')->name('news');
    Route::get('news/{news_title}', 'singleNews')->name('single-news');
    Route::get('postgraduate-units', 'postgraduateUnits')->name('postgraduate-units');
    Route::get('postgraduate-units/{unit_title}', 'postgraduateUnit')->name('postgraduate-unit');
    // Route::get('/dpric/research-programmes', 'researchProgrammes')->name('research-programmes');
});


// DPRIC ADMIN
Route::controller(DpricAdminController::class)->name('dpric.admin.')->group(function () {
    Route::get('/dpric/admin', 'index')->name('index');
});

Route::prefix('admin')->as('admin.')->group(function () {
    Route::resource('dpric-news', NewsController::class);
    Route::resource('dpric-units', UnitsController::class);
    Route::resource('dpric-awards', AwardsController::class);
    Route::resource('dpric-documents', DocumentsController::class);
    Route::resource('dpric-images', ImagesController::class);
    Route::resource('dpric-clubs', ClubController::class);
    Route::resource('clubs/{club_name}/activities', ClubActivityController::class);
    Route::resource('clubs/{club_name}/leaders', ClubLeaderController::class);
    Route::resource('clubs/{club_name}/club-gallery', ClubGalleryController::class);
    Route::resource('clubs/{club_name}/projects', InnovationProjectController::class);
    Route::resource('clubs/{club_name}/projects/{project_name}/project-gallery', InnovationProjectGalleryController::class);
    Route::resource('dpric-management', DpricManagementController::class);

    Route::get('/dpric-contents/pages', [DpricContentController::class, 'getPages'])->name('contents.get-pages');
    Route::get('/dpric-contents/pages/{page_name}', [DpricContentController::class, 'getPage'])->name('contents.get-page');
    Route::get('/dpric-contents/pages/{page_name}/{content_title}', [DpricContentController::class, 'getContent'])->name('contents.get-content');
    Route::get('/dpric-contents/pages/{page_name}/{content_title}/edit', [DpricContentController::class, 'editContent'])->name('contents.edit-content');
    Route::put('/dpric-contents/pages/{page_name}/{content_title}', [DpricContentController::class, 'updateContent'])->name('contents.update-content');

});

// STORAGE
Route::get('/storage/{path}', function ($path) {
    $filePath = 'public/' . $path;

    if (!Storage::exists($filePath)) {
        abort(404);
    }

    return response()->file(storage_path('app/' . $filePath));
})->where('path', '.*');

