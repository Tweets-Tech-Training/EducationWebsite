<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Slider as SliderModel ;
use Livewire\WithFileUploads;


class SliderFormLivewire extends Component
{
    use WithFileUploads ;
    public  $slider;
    public  $image , $isUpdate=0 ;
    protected $rules = [
        'slider.title'=>'required',
        'slider.details'=>'required',
        'slider.image'=>'required',
    ];

    public function mount($id=null )
    {
        $id ? $this->isUpdate=1 : $this->isUpdate=0;
        $this->slider = $id?SliderModel::find($id):new SliderModel();
    }

    public function render()
    {

        return view('livewire.slider.form')->extends('dashboard_layout.main');
    }

    public function save()
    {
        if ($this->image ) {
            $filename = $this->image->store('public/images');
            $imagename = $this->image->hashName();
            $this->slider->image = $imagename;
        }
        $this->validate();
        $this->slider->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل السلايدر بنجاح' : 'تم إضافة السلايدر بنجاح',
            'url'=>  route('slider.index'),
        ]);
    }



}
