<?php

namespace App\Http\Controllers\StudentApi;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\Course;
use App\Http\Resources\PaymentResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentCoureses extends BaseController
{
    public function displayCourses(){
        $authUser = Auth::user();
        $courses= $authUser->courses()->get();
        return $this->sendResponse(Course::collection($courses), 'الكورسات المسجلة لهذه الطالب ');
    }
    public function payment(){
        $authUser = Auth::user();
        $payments = $authUser->payments()->get();
        return $this->sendResponse(PaymentResource::collection($payments), 'السجل المالي للطالب ');

    }

}
