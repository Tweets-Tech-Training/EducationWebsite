<?php

namespace App\Http\Livewire\PaymentSystem;

use App\Models\PaymentSystem as PaymentSystemModel;
use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class PaymentSystem extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public  $paymentSystem ;
    public $searchByStudentName  ;
    public function updatingSearchByStudentName()
    {
        $this->resetPage();
    }
    public function render()
    {
//        $studentName= Student::where('id',$this->paymentSystem->student_id)->first();
        return view('livewire.payment-system.index',
            ['payments' => PaymentSystemModel::orderBy('id','desc')->where('course_id', 'like', '%' . $this->updatingSearchByStudentName() . '%')->paginate(3)])
            ->extends('dashboard_layout.main');
    }

//    public function delete($id)
//    {
//        PaymentSystemModel::find($id)->delete();
//        $this->dispatchBrowserEvent('swal:modal', [
//            'type' => 'success',
//            'message' => 'تم حذف السجل المالي بنجاح',
//        ]);
//    }

    public function search(){
    }

    public function resetSearch(){
        $this->searchByStudentName = " ";
    }

}
