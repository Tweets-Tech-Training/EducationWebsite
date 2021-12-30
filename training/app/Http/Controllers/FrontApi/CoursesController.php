<?php

namespace App\Http\Controllers\FrontApi;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\Course;
use App\Models\Category;
use App\Models\CourseRegistration;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Course as CourseModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CoursesController extends BaseController
{

    public function displayCourses(){
        $courses =CourseModel::get();
        return $this->sendResponse(Course::collection($courses), 'عرض كل الدورات ');
    }
    public function displayCourseDetails($id){
        $course=CourseModel::find($id);
        return $this->sendResponse(new Course($course), 'عرض تفاصيل  الدورات ');
    }
    public function displayCategory(){
        $category =Category::get();
        return $this->sendResponse(CategoryResource::collection($category), 'عرض كل التصنيفات ');
    }
    public function courseRegistration(Request  $request){
        $data= $request->all();
        $request->validate([
            'course_id' => 'required',
            'name' => 'required',
            'gender'=>'required',
            'email'=>'required|email',
            'mobile'=>'required|digits:10',
            'address'=>'required'
        ]);
        $password = Str::random(8);
        $data['password']=Hash::make($password);
        $student =Student::where([['email',$request->email] , ['mobile',$request->mobile]])->first();
        if ($student){
            $data['student_id']=$student->id ;
        }else{
            $student =Student::create($data);
            $data['student_id']  =$student->id ;
        }
        $course = CourseRegistration::where([['course_id','=',$request->course_id],['student_id','=',$data['student_id']]])->first();
        if ($course){
            $message ='أنت مسجل في هذا الكورس';
        }else{
            CourseRegistration::create($data);
            $message='تم التسجيل بنجاح';
        }
        return $this->sendResponse($message, 'تم ارسال البيانات بنجاح  ');
    }


    public function courseSearch(Request $request){
        $category_id = $request->category_id ;
        $courseName = $request->courseName ;
        $courses = \App\Models\Course::query();
        if($category_id){
            $courses = \App\Models\Course::where('category_id',$category_id);
        }
        if($courseName){
            $courses = \App\Models\Course::where('name','like',"%$courseName%");
        }

        $categories = Category::all();
        $courses = $courses->orderBy('id','desc')->get();

        return $this->sendResponse(Course::collection($courses), 'عرض   الدورة ');



    }

}
