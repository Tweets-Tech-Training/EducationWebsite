<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders = $this->getImagesSlider();
        $categories = $this->getSixCategories();
        $courses = $this->getCourses();
        $reviews = $this->getTestimonial();
        $partners = $this->getPartners();
        return view('layouts.front.index')->with([
            'sliders'=>$sliders,
            'categories'=>$categories,
            'courses'=>$courses,
            'reviews'=>$reviews,
            'partners'=>$partners,
        ]);
    }

//    *** get 3 images Sliders  ***
    public function getImagesSlider(){
        return Slider::orderBy('id','desc')->take(3)->get();
    }



//    *** get 6 Categories ***
    public function getSixCategories(){
        return Category::orderBy('id','desc')->take(6)->get();
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

}
