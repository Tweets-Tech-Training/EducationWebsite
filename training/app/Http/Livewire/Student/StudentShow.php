<?php

namespace App\Http\Livewire\Student;

use App\Models\Student;
use Livewire\Component;

class StudentShow extends Component
{

    public $student, $courses;
    public function mount($id = null)
    {
        $this->student = Student::find($id);
         $this->courses=$this->student->courses()->get();
        //  $this->course=CourseRegistration::where('student_id',$id)->get('course_id');
      //  dd( $this->course);
        //$this->course = CourseRegistration::where('student_id',$id)->get('course_id');
    }
    public function render()
    {
        return view('livewire.student.student-show',[
            'student' => $this->student,
            'courses' => $this->courses
        ])->extends('dashboard_layout.main');
    }
}
