<?php

use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\FrontApi\ContactAndTestimoinalContoller;
use App\Http\Controllers\FrontApi\CoursesController;
use App\Http\Controllers\FrontApi\TrainerController;
use App\Http\Controllers\StudentApi\StudentAuth;
use App\Http\Controllers\StudentApi\StudentCoureses;
use App\Http\Controllers\TrainerApi\TrainerAuth;
use App\Http\Controllers\TrainerApi\TrainerCourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::group(['middleware' => 'auth:trainer-api'], function(){
//    Route::post('admin/get-details', 'API\Admin\AdminController@getDetails');
//});
Route::middleware('auth:sanctum')->group( function () {

    Route::post('admin/get-details', [TrainerAuth::class,'getDetails']);
    Route::post('update', [TrainerAuth::class,'updateProfile']);
    Route::get('trainer/courses/api', [TrainerCourses::class,'index']);
    Route::get('trainer/student/api', [TrainerCourses::class,'displayStudent']);
    Route::post('logout', [TrainerAuth::class, 'logout']);
});

Route::post('trainer_api', [TrainerAuth::class, 'login']);

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::post('logout', [RegisterController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group( function () {
   //Route::resource('courses', \App\Http\Controllers\Api\CoursesController::class);
});











////////////////////***********    Route For Student Api *******************/////////////////////
 Route::post('student-api', [\App\Http\Controllers\StudentApi\StudentAuth::class, 'login']);
Route::middleware('auth:sanctum')->group( function () {

    Route::get('student/get-courses', [StudentCoureses::class,'displayCourses']);
    Route::get('student/get-payment', [StudentCoureses::class,'payment']);
    Route::post('student/update-profile', [StudentAuth::class,'updateProfile']);

  //  Route::post('logout', [TrainerAuth::class, 'logout']);
});










////////////////////////******************** Route For Front Api *****************///////////////////////
Route::get('front/get-trainer', [TrainerController::class,'displayTrainers']);
Route::get('front/{id}/get-trainer-courses', [TrainerController::class,'displayCoursesTrainer']);
Route::get('front/get-all-category', [CoursesController::class,'displayCategory']);
Route::get('front/get-all-courses', [CoursesController::class,'displayCourses']);
Route::get('front/{id}/get-courses-details', [CoursesController::class,'displayCourseDetails']);

Route::get('front/get-all-testimonial', [ContactAndTestimoinalContoller::class,'displayTestimonial']);
Route::post('front/contact-us', [ContactAndTestimoinalContoller::class,'send']);

Route::post('front/courseRegistration', [CoursesController::class,'courseRegistration']);
Route::post('front/course/search', [CoursesController::class,'courseSearch']);
