<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Student;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    public function index(){
        $sliders = $this->getImagesSlider();
        $categories = $this->getCategories();
        $courses = $this->getCourses();
        $reviews = $this->getTestimonial();
        $partners = $this->getPartners();
        $logo = Setting::get();
        return view('layouts.front.index')->with([
            'sliders'=>$sliders,
            'categories'=>$categories,
            'courses'=>$courses,
            'reviews'=>$reviews,
            'partners'=>$partners,
            'logo' => $logo,
        ]);
    }

//    *** get 3 images Sliders  ***
    public function getImagesSlider(){
        return Slider::orderBy('id','desc')->take(3)->get();
    }

//    *** get 6 Categories ***
    public function getCategories(){
        return Category::orderBy('id','desc')->get();
    }
    //    *** get  Courses ***
    public function getCourses(){
        return Course::orderBy('id','desc')->get();
    }
    //    *** get 4 Testimonial  ***
    public function getTestimonial(){
        return Testimonial::orderBy('id','desc')->take(4)->get();
    }
    //    *** get partners  ***
    public function getPartners(){
        return Partner::orderBy('id','desc')->get();
    }

    public function courseRegistration(Request  $request){
        $data= $request->all();

        $this->validate($request,[
            'course_id' => 'required',
            'name' => 'required',
            'gender'=>'required',
            'email'=>'required|email',
            'mobile'=>'required|digits:10',
            'address'=>'required'
        ],[],[]);
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
            $message = response()->json(['warning'=>'أنت مسجل في هذا الكورس']);
        }else{
            CourseRegistration::create($data);
            $message= response()->json(['success'=>'تم التسجيل بنجاح']);
        }
        return $message ;
    }

    public function getSetting(){
        return Setting::all();
    }

    public function courseRegistrationShow()
    {
        return view('layouts.front.course-registration');
    }


}
