<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Slider;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Request  $request){
        $category_id = $request->category_id ;
        $courseName = $request->courseName ;
        $courses = Course::query();
        if($category_id){
            $courses = Course::where('category_id',$category_id)->get();
        }
        if($courseName){
            $courses = Course::where('name','like',"%$courseName%")->get();
        }
        $categories = Category::all();
        $courses = $courses->orderBy('id','desc');

        return view('layouts.front.course')->with([
            'courses'=>$courses,
            'categories'=>$categories,
        ]);
    }
    public function courseSearch(Request $request){
       $category_id = $request->category_id ;
       $courseName = $request->courseName ;
       if($category_id){
           $courses = Course::where('category_id',$category_id)->get();
       }
       if($courseName){
           Course::where('name','like',"%$courseName%")->get();
       }
    }
}
