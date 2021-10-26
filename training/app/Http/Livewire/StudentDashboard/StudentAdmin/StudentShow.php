<?php

namespace App\Http\Livewire\StudentDashboard\StudentAdmin;
use App\Models\Course;
use Livewire\Component;

class StudentShow extends Component
{
    public $student, $course;
    public function mount($id = null)
    {
        $this->course = Course::find($id);
      //  $this->courses=$this->student->courses()->get();
        //  $this->course=CourseRegistration::where('student_id',$id)->get('course_id');
        //  dd( $this->course);
        //$this->course = CourseRegistration::where('student_id',$id)->get('course_id');
    }
    public function render()
    {
        return view('livewire.studentDashboard.student-admin.student-show',
            ['course' => $this->course])->extends('front_layout.main_student');
    }
}
