<?php

namespace App\Http\Livewire\ContactUs;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ContactUs as ContactUsModel;


class ContactUs extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public $paginateNum=4;
    public $deleteId = '';

    public function render()
    {

        if($this->search) {
            $contacts=ContactUsModel::orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginateNum);
            return view('livewire.contact-us.contact-us',['contacts'=>$contacts,'id'=>''])->extends('dashboard_layout.main');
        }
        $contacts= ContactUsModel::orderby('id','asc')->paginate($this->paginateNum);;
        return view('livewire.contact-us.contact-us',
            [
                'contacts' => $contacts
            ])->extends('dashboard_layout.main');

    }
    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        ContactUsModel::find($this->deleteId)->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الرسالة بنجاح بنجاح',
        ]);
    }
}
