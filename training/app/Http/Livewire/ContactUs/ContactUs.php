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
    public $deleteId = '';

    public function render()
    {
        $contacts= ContactUsModel::orderby('id','asc')->paginate(10);;
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
