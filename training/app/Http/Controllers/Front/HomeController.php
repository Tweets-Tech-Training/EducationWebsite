<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = $this->getSixCategories();
        return view('layouts.front.index',compact('categories',$categories));
    }

//    *** get 6 Categories ***
    public function getSixCategories(){

        return Category::orderBy('id','desc')->take(6)->get();
    }
}
