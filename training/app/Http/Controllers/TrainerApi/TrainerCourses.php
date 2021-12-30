<?php

namespace App\Http\Controllers\TrainerApi;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CourseRegistartionResources;
use App\Models\CourseRegistration;
use Illuminate\Http\Request;
use App\Http\Resources\Course;
use Illuminate\Support\Facades\Auth;

class TrainerCourses extends BaseController
{
    public function index(){
        $authUser = Auth::user();
        //dd($authUser);
        $courses= $authUser->courses()->get();

        return $this->sendResponse(Course::collection($courses), 'كل الكورسات التابعة للمدرب ');

    }

    public function displayStudent(){
        $authUser = Auth::user();
        $student_ids=$authUser->courses()->get()->pluck('id')->toArray();
        $course_registers=CourseRegistration::whereIn('course_id',$student_ids)->get();
        return $this->sendResponse(CourseRegistartionResources::collection($course_registers), 'كل الطلاب التابعة للمدرب ');
    }
}
