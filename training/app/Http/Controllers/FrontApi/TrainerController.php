<?php

namespace App\Http\Controllers\FrontApi;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\Course;
use App\Http\Resources\TrainerResource;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends BaseController
{
    public function displayTrainers(){
        $trainers = Trainer::orderBy('id','desc')->get();
        return $this->sendResponse(TrainerResource::collection($trainers), 'كل المدربين  ');
    }
        public function displayCoursesTrainer($id){
            $trainer=Trainer::find($id);
           // dd($trainer);
            $courses=$trainer->courses()->get();
            return $this->sendResponse(Course::collection($courses), 'كل الدورات التابعة للمدرب  ');

        }
}
