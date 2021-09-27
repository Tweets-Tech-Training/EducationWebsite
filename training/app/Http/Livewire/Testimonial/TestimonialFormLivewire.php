<?php

namespace App\Http\Livewire\Testimonial;

use Livewire\Component;
use App\Models\Testimonial as TestimonialModel ;
use Livewire\WithFileUploads;

class TestimonialFormLivewire extends Component
{
    use WithFileUploads ;
    public $testimonial ;
    public $isUpdate=0 , $image;
    protected $rules = [
        'testimonial.name'=>'required',
        'testimonial.job_title'=>'required',
        'testimonial.message'=>'required',
        'testimonial.image'=>'required',
    ];
    public function mount($id=null){
        $id ? $this->isUpdate=1 : $this->isUpdate=0;
        return $this->testimonial = $id ? TestimonialModel::find($id) : new TestimonialModel();

    }
    public function render()
    {
        return view('livewire.testimonial.form')->extends('dashboard_layout.main');
    }

    public function save()
    {
        if ($this->image ) {
            $filename = $this->image->store('public/images');
            $imageName = $this->image->hashName();
            $this->testimonial->image = $imageName;
        }
        $this->validate();
        $this->testimonial->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل الرأي بنجاح' : 'تم إضافة الرأي بنجاح',
            'url'=> route('testimonial.index'),
        ]);
    }

}
