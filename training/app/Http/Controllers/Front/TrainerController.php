<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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
}
