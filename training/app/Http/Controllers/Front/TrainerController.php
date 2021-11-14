<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index(Request  $request){

        $trainers = Trainer::orderBy('id','desc')->get();
        return view('layouts.front.trainer')->with([
            'trainers'=>$trainers,
        ]);
    }


    public function show($id){
        $trainer=Trainer::find($id);
        $courses=$trainer->courses()->paginate(4);

        return view('layouts.front.courses-trainer')->with([
            'courses'=>$courses,
            'trainer'=>$trainer,
        ]);

    }
}
