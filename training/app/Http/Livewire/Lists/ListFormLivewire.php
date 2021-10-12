<?php

namespace App\Http\Livewire\Lists;

use App\Models\ListModel;
use Livewire\Component;

class ListFormLivewire extends Component
{
    public  $list , $isUpdate=0;
    protected $rules = [
        'list.name'=>'required',
        'list.route'=>'required',
    ];
    public function mount(){
//        $this->list = ListModel::first() ;
        $this->list !=null ? $this->isUpdate=1 : $this->isUpdate=0 ;
//        return $this->setting =$this->setting ? ListModel::first() : new ListModel();
    }
    public function render()
    {
        return view('livewire.lists.form')->extends('dashboard_layout.main');
    }
//    public function save()
//    {
//
//        $this->validate();
//        $this->list->save();
//        $this->dispatchBrowserEvent('swal:modal', [
//            'type' => 'success',
//            'message' => $this->isUpdate ? 'تم تعديل الإعدادات بنجاح' : 'تم إضافة الإعدادات بنجاح',
//            'url'=> route('settings.index'),
//        ]);
//    }

}
