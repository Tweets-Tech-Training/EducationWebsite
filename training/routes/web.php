<?php


use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Livewire\AboutUs\AboutUs;
use App\Http\Livewire\AboutUs\AboutUsFormLivewire;
use App\Http\Livewire\Categories\Categories;
use App\Http\Livewire\Categories\CategoriesFormLivewire;
use App\Http\Livewire\Courses\Course;
use App\Http\Livewire\Courses\CourseFormLivewire;
use App\Http\Livewire\Images\ImagesGallery;
use App\Http\Livewire\Images\ImagesGalleryFormLivewire;
use App\Http\Livewire\Images\ShowImages;
use App\Http\Livewire\Partners\Partners;
use App\Http\Livewire\Partners\PartnersFormLivewire;
use App\Http\Livewire\Settings\Settings;
use App\Http\Livewire\Settings\SettingsFormLivewire;
use App\Http\Livewire\Slider;
use App\Http\Livewire\SliderFormLivewire;
use App\Http\Livewire\Testimonial\Testimonial;
use App\Http\Livewire\Testimonial\TestimonialFormLivewire;
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

Route::get('/', function () {
    return view('welcome');
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

    Route::get('courses',Course::class)->name('courses.index');
    Route::get('courses/create',CourseFormLivewire::class)->name('course.create');
    Route::get('courses/{id}/edit', CourseFormLivewire::class)->name('course.edit');

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
//    Route::get('/settings/create',SettingsFormLivewire::class)->name('settings.create');
//    Route::get('/settings/{id}/edit',SettingsFormLivewire::class)->name('settings.edit');

    Route::get('categories',Categories::class)->name('categories.index');
    Route::get('/categories/create',CategoriesFormLivewire::class)->name('categories.create');
    Route::get('/categories/{id}/edit',CategoriesFormLivewire::class)->name('categories.edit');

});
//  *** End Front Admin Panel Routes  ***

//  *** Start Front index Route *** //
Route::get('/index',[HomeController::class,'index'])->name('front.index');
Route::post('/course-registration',[HomeController::class,'courseRegistration'])->name('course.register');
Route::get('/courses',[CourseController::class,'index'])->name('front.courses.index');
//Route::post('/courses/search',[CourseController::class,'courseSearch'])->name('front.courses.search');
//  *** End Front index Route *** //
