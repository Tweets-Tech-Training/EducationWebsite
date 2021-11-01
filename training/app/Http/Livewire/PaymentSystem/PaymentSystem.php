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
    public $searchByStudentName ;
    public $search;
    public $deleteId = '';
    public function updatingSearchByStudentName()
    {
        $this->resetPage();
    }
    public function render()
    {
//        $studentName= Student::where('id',$this->paymentSystem->student_id)->first();
        return view('livewire.payment-system.index',
            ['payments' => PaymentSystemModel::orderBy('id','desc')->paginate(3)])
            ->extends('dashboard_layout.main');
    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        PaymentSystemModel::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف السجل المالي بنجاح',
        ]);
    }

    public function search(){
    }

    public function resetSearch(){
        $this->searchByStudentName = " ";
    }

}
