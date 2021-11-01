<?php

namespace App\Http\Livewire\PaymentSystem;

use App\Models\Course;
use App\Models\Order;
use App\Models\Student;
use Livewire\Component;

class PaymentSystemForm extends Component
{

    public $payment, $courses , $students ,$remaining_amount , $date , $payment_amount , $note;
    public $remaining_amount1 = 0;

    public function mount($id = null)
    {
        $this->payment = $id ? \App\Models\PaymentSystem::find($id): new \App\Models\PaymentSystem();
         $this->courses=Course::get();
        $this->students=Student::get();


    }
    protected $rules = [
        'payment.remaining_amount'=>'nullable',
        'payment.course_id'=>'required',
        'payment.student_id'=>'required',
        'payment.payment_amount'=>'nullable',
        'payment.note'=>'nullable',
    ];
    public function render()
    {
        //dd(  $this->payment);
        return view('livewire.payment-system.form')->extends('dashboard_layout.main');
    }
    public function save()
    {
//
        $this->validate();
        $course= \App\Models\Course::find($this->payment->course_id);
        $price = $course->price;
        $this->remaining_amount=$price - $this->payment ->payment_amount ;
        $this->payment->save();

        $this->payment->update([
            'remaining_amount' =>   $this->remaining_amount
        ]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('paymentSystem.index')
        ]);
    }

}
