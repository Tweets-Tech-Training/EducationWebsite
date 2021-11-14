<?php

namespace App\Http\Livewire\TrainerAdmin;

use App\Models\Course;
use App\Models\CourseRegistration;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TrainerStudents extends Component
{
public $user , $course , $students , $search , $course_registers , $search_array=[];
    public function mount()
    {
        $this->user = Auth::guard('trainer')->user();
        $student_ids=$this->user->courses()->get()->pluck('id')->toArray();
        //$course_register = CourseRegistration::whereIn('course_id',$student_ids)->get()->pluck('student_id')->toArray();
       // $this->students = Student::find($course_register);



//        $this->course= $course_register->courses();
    // dd($course_register);


    }

    public function render()
    {
        $this->user = Auth::guard('trainer')->user();
        $student_ids=$this->user->courses()->get()->pluck('id')->toArray();
        $this->course_registers=CourseRegistration::search($this->search_array)->whereIn('course_id',$student_ids)->get();
        return view('livewire.trainer-admin.trainer-students'
        ,[
            'course_registers' => $this->course_registers
               // 'course' => $this->course
            ])->extends('edomi_dashboard_layout.main');
    }
    public  function search()
    {


    }
}
