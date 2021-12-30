<?php

namespace App\Http\Livewire\StudentDashboard\StudentAdmin;
use App\Models\Course;
use App\Models\CourseRegistration;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Studentcourses extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search , $numCourses ;
    public $student;
    public function mount()
    {
        $this->student = Auth::guard('student')->user();

        //dd($this->courses);
    }
    public function render()
    {

        $this->numCourses= $this->student->courses->count();
//        dd($this->numCourse);

        //dd($this->courses);
        if($this->search){
            $courses=Course::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            return view('livewire.studentDashboard.student-admin.studentcourses',['courses'=>$courses,'id'=>''])->extends('front_layout.main_student');
        }
        return view('livewire.studentDashboard.student-admin.studentcourses',[
            'courses' =>  $this->student->courses()->paginate(10),
        ])->extends('front_layout.main_student');
    }
}
