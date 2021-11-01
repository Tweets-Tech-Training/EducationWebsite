<?php

namespace App\Http\Livewire\Student;

use App\Models\Course;
use App\Models\CourseRegistration;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\Student;
class Studentform extends Component
{
    public $student, $course;
    public function mount($id = null)
    {
        $this->student = Student::find($id);
       // $this->course=$this->student->courses()->get();
      //  $this->course=CourseRegistration::where('student_id',$id)->get('course_id');
//        dd( $this->course);
        //$this->course = CourseRegistration::where('student_id',$id)->get('course_id');
    }
    protected function rules()
    {
        return [
            'student.name' => 'required|string',
            'student.email' =>  $this->student->id?'required|string|email|max:255|unique:students,email, '. $this->student->id:"required|string|email|max:255|unique:students,email",
            'student.gender' => 'required',
            'student.address' => 'required',
            'student.status' => 'required',
            'student.mobile' =>  $this->student->id?'required|string|max:255|unique:students,mobile, '. $this->student->id:"required|string|max:255|unique:students,mobile",

        ];
    }
    public function render()
    {

        return view('livewire.student.form')->extends('dashboard_layout.main');
    }
    public function save()
    {

        $this->validate();
        $this->student->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('student')
        ]);
    }
}
