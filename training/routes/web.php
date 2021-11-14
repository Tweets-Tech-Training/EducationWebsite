<?php


use App\Http\Controllers\Front\ContactUsController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MailController;
use App\Http\Controllers\Front\TrainerController;
use App\Http\Livewire\AboutUs\AboutUs;
use App\Http\Livewire\AboutUs\AboutUsFormLivewire;
use App\Http\Livewire\Categories\Categories;
use App\Http\Livewire\Categories\CategoriesFormLivewire;
use App\Http\Livewire\ContactUs\ContactUs;
use App\Http\Livewire\Courses\Course;
use App\Http\Livewire\Courses\CourseFormLivewire;
use App\Http\Livewire\Halls\Halls;
use App\Http\Livewire\Halls\HallsLivewireForm;
use App\Http\Livewire\Images\ImagesGallery;
use App\Http\Livewire\Images\ImagesGalleryFormLivewire;
use App\Http\Livewire\Images\ShowImages;
use App\Http\Livewire\Lists\ListFormLivewire;
use App\Http\Livewire\Lists\ListLivewire;
use App\Http\Livewire\Mail\MailSystemLivewire;
use App\Http\Livewire\Partners\Partners;
use App\Http\Livewire\Partners\PartnersFormLivewire;
use App\Http\Livewire\PaymentSystem\PaymentSystem;
use App\Http\Livewire\PaymentSystem\PaymentSystemForm;
use App\Http\Livewire\Settings\Settings;
use App\Http\Livewire\Settings\SettingsFormLivewire;
use App\Http\Livewire\Slider;
use App\Http\Livewire\SliderFormLivewire;
use App\Http\Livewire\Student\Studentform;
use App\Http\Livewire\StudyDivisions\StudyDivision;
use App\Http\Livewire\StudyDivisions\StudyDivisionForm;
use App\Http\Livewire\Testimonial\Testimonial;
use App\Http\Livewire\Testimonial\TestimonialFormLivewire;
use App\Http\Livewire\Trainer\Trainer;
use App\Http\Livewire\Student\Student;
use App\Http\Livewire\Trainer\TrainerForm;
use App\Http\Livewire\TrainerAdmin\TrainerProfile;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/main', function () {
    return view('layouts.front.course-registration');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
    return view('dashboard_layout.main');
});


//  *** Start Front Admin Panel Routes  ***
Route::group(['middleware'=>'auth','prefix'=>'training/admin'],function(){
    Route::get('/',function(){
        return view('dashboard_layout.main');
    })->name('dashboard');
    Route::get('slider', Slider::class)->name('slider.index');
    Route::get('slider/create', SliderFormLivewire::class)->name('slider.create');
    Route::get('slider/{id}/edit', SliderFormLivewire::class)->name('slider.edit');
    Route::get('admin-profile',\App\Http\Livewire\Profile\AdminProfile::class)->name('admin.profile');

    Route::get('courses',Course::class)->name('courses.index');
    Route::get('courses/create',CourseFormLivewire::class)->name('course.create');
    Route::get('courses/{id}/edit', CourseFormLivewire::class)->name('course.edit');


    Route::get('halls',Halls::class)->name('halls.index');
//    Route::get('halls/show',HallsLivewireForm::class)->name('halls.show');
    Route::get('halls/{id}/show', HallsLivewireForm::class)->name('halls.show');

    Route::get('about-us',AboutUsFormLivewire::class)->name('about-us.index');

    Route::get('/imagesGallery',ImagesGallery::class)->name('imagesGallery.index');
    Route::get('/imagesGallery/create',ImagesGalleryFormLivewire::class)->name('imagesGallery.create');
    Route::get('/imagesGallery/{id}/show',ShowImages::class )->name('images.show');
    Route::get('/imagesGallery/{id}/edit',ImagesGalleryFormLivewire::class)->name('imagesGallery.edit');

    Route::get('testimonial',Testimonial::class)->name('testimonial.index');
    Route::get('/testimonial/create',TestimonialFormLivewire::class)->name('testimonial.create');
    Route::get('/testimonial/{id}/edit',TestimonialFormLivewire::class)->name('testimonial.edit');

    Route::get('partners',Partners::class)->name('partners.index');
    Route::get('/partners/create',PartnersFormLivewire::class)->name('partners.create');
    Route::get('/partners/{id}/edit',PartnersFormLivewire::class)->name('partners.edit');

    Route::get('settings',SettingsFormLivewire::class)->name('settings.index');

    Route::get('categories',Categories::class)->name('categories.index');
    Route::get('/categories/create',CategoriesFormLivewire::class)->name('categories.create');
    Route::get('/categories/{id}/edit',CategoriesFormLivewire::class)->name('categories.edit');

    Route::get('trainer',Trainer::class)->name('trainer');
    Route::get('trainer/create', TrainerForm::class)->name('trainer.create');
    Route::get('trainer/{id}/edit', TrainerForm::class)->name('trainer.edit');


    Route::get('student',Student::class)->name('student');
//    Route::get('student/create', Studentform::class)->name('student.create');
    Route::get('student/{id}/edit',Studentform::class)->name('student.edit');
    Route::get('student/{id}/show',\App\Http\Livewire\Student\StudentShow::class)->name('student.show');


    Route::get('contact-us',ContactUs::class)->name('contact-us');

    Route::get('studyDivision',StudyDivision::class)->name('studyDivision.index');
    Route::get('studyDivision/create',StudyDivisionForm::class)->name('studyDivision.create');
    Route::get('studyDivision/{id}/edit',StudyDivisionForm::class)->name('studyDivision.edit');


    Route::get('mail',MailSystemLivewire::class)->name('mail');
    Route::get('mail/create',\App\Http\Livewire\Mail\MailFormLivewire::class)->name('mail.create');


    Route::get('paymentSystem',PaymentSystem::class)->name('paymentSystem.index');
    Route::get('paymentSystem/create',PaymentSystemForm::class)->name('paymentSystem.create');
    Route::get('paymentSystem/{id}/edit',PaymentSystemForm::class)->name('paymentSystem.edit');
    Route::get('paymentSystem/{id}/show',\App\Http\Livewire\PaymentSystem\PaymentSystemShow::class)->name('paymentSystem.show');


});
//  *** End Front Admin Panel Routes  ***



//  *** Start Front index Route *** //
Route::get('/',[HomeController::class,'index'])->name('front.index');
Route::get('/course-registration-form',[HomeController::class,'courseRegistrationShow'])->name('course.register.form');
Route::post('/course-registration',[HomeController::class,'courseRegistration'])->name('course.register');
Route::get('/courses/{id}/details',[CourseController::class,'show'])->name('front.courses.details');
Route::get('/courses/',[CourseController::class,'index'])->name('front.courses.index');
Route::get('/contact-us',[ContactUsController::class,'index'])->name('front.contact-us.index');
Route::post('/send',[ContactUsController::class,'send'])->name('contact.send');
Route::get('/trainer/{id}/courses',[TrainerController::class,'show'])->name('front.trainer.courses');
Route::get('/trainer/index',[TrainerController::class,'index'])->name('front.trainer.index');
Route::get('/testimonial/index',[\App\Http\Controllers\Front\TestimonialController::class,'index'])->name('front.testimonial.index');
Route::post('/mail_send',[MailController::class,'send'])->name('mail.send');

Route::post('/courses/search',[CourseController::class,'courseSearch'])->name('front.courses.search');
//  *** End Front index Route *** //


Route::get('/student-login', \App\Http\Livewire\StudentDashboard\StudentAdmin\Login::class)->name('student-login');




/////////////////// Route for student dashboard ///////////////////////
Route::group(['middleware'=>['auth:student'],'prefix'=>'training/admin'],function(){
    Route::get('/student-profile', \App\Http\Livewire\StudentDashboard\StudentAdmin\StudentProfile::class)->name('student-profile');
    Route::get('/student-courses', \App\Http\Livewire\StudentDashboard\StudentAdmin\Studentcourses::class)->name('student-courses');
    Route::get('/student-course/{id}/show', \App\Http\Livewire\StudentDashboard\StudentAdmin\StudentShow::class)->name('student-course.show');
    Route::get('/student-payments', \App\Http\Livewire\StudentDashboard\StudentAdmin\StudentPayments::class)->name('student-payments');

});



///////////////////////// ////////////////////////////////
Route::group(['middleware'=>['auth:trainer'],'prefix'=>'training/admin'],function(){
    Route::get('/profile', TrainerProfile::class)->name('profile');
    Route::get('/trainer-students', \App\Http\Livewire\TrainerAdmin\TrainerStudents::class)->name('trainer-students');
    Route::get('/trainer-courses', \App\Http\Livewire\TrainerAdmin\TrainerCourses::class)->name('trainer-courses');
    Route::get('/trainer-course/{id}/show', \App\Http\Livewire\TrainerAdmin\CourseShow::class)->name('trainer-course.show');

});
