<?php

namespace App\Http\Livewire\TrainerAdmin;


use App\Models\Course;
use Livewire\Component;

class CourseShow extends Component
{
    public  $course;
    public function mount($id = null)
    {
        $this->course = Course::find($id);
        //  dd( $this->course);
    }
    public function render()
    {
        return view('livewire.trainer-admin.course-show',
            ['course' => $this->course])->extends('edomi_dashboard_layout.main');
    }
}
