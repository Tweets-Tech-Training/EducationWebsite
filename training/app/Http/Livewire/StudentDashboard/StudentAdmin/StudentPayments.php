<?php

namespace App\Http\Livewire\StudentDashboard\StudentAdmin;

use App\Models\Course;
use App\Models\PaymentSystem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class StudentPayments extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search , $numCourses ;
    public $student , $payments;
    public function mount()
    {
        $this->student = Auth::guard('student')->user();
        $this->payments = $this->student->payments()->get();
     //  dd($this->payments);
    }
    public function render()
    {
        $this->numCourses= $this->student->courses->count();
//        $courses=$this->student->courses()->paginate(10);
//        foreach ($courses as $cours){
//            $payment=PaymentSystem::find($cours->id);
//            dd($payment);
//        }

        return view('livewire.studentDashboard.student-admin.student-payments',
        [
            'payments'=> $this->payments,

        ])->extends('front_layout.main_student');

    }
}
