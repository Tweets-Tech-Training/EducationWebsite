<?php

namespace App\Http\Controllers\Front;
use App\Models\Testimonial;
use App\Models\Trainer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index(Request  $request){

        $reviews= Testimonial::orderBy('id','desc')->get();
        return view('layouts.front.testimonial')->with([
            'reviews'=>$reviews,
        ]);
    }
}
