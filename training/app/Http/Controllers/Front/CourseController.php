<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request  $request){
        $category_id = $request->category_id ;
        $courseName = $request->courseName ;
        $courses = Course::query();
        if($category_id){
            $courses = Course::where('category_id',$category_id);
        }
        if($courseName){
            $courses = Course::where('name','like',"%$courseName%");
        }
        $categories = Category::all();
        $courses = $courses->orderBy('id','desc')->paginate(4);
        return view('layouts.front.course')->with([
            'courses'=>$courses,
            'categories'=>$categories,
        ]);
    }
    public function courseSearch(Request $request){
        $category_id = $request->category_id ;
        $courseName = $request->courseName ;
        $courses = Course::query();
        if($category_id){
            $courses = Course::where('category_id',$category_id);
        }
        if($courseName){
            $courses = Course::where('name','like',"%$courseName%");
        }

        $categories = Category::all();
        $courses = $courses->orderBy('id','desc')->get();
        $html=\View::make('layouts.front.searchCourseResult',[
            'courses'=> $courses ,
//            'categories'=>$categories,
        ])->render();
        return response()->json(['html'=>$html]);
//        return response()->json(['courses'=>$courses,]);

    }


    public function show($id){
        $course=Course::find($id);

        $trainer=$course->trainer()->first();
        //dd($trainer);
        return view('layouts.front.course-details')->with([
            'course'=>$course,
            'trainer'=>$trainer,
        ]);

    }
}
