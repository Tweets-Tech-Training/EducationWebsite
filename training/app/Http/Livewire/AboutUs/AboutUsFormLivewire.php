<?php

namespace App\Http\Livewire\AboutUs;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\AboutUs ;

class AboutUsFormLivewire extends Component
{
    use WithFileUploads ;
    public  $aboutUs;
    public  $desktopVideo , $cover_image ,$isUpdate=0 ;
    protected $rules = [
        'aboutUs.name'=>'required',
        'aboutUs.details'=>'required',
        'aboutUs.cover_image'=>'required',
        'aboutUs.type'=>'required',
        'aboutUs.video'=>'required',
    ];

    public function mount(){

        $this->aboutUs = AboutUs::first() ;
        $this->aboutUs !=null ? $this->isUpdate=1 : $this->isUpdate=0 ;
        return $this->aboutUs =$this->aboutUs ? AboutUs::first() : new AboutUs();
    }

    public function render()
    {
        return view('livewire.about-us.form',
            ['aboutUs' =>AboutUs::first()]
        )->extends('dashboard_layout.main');
    }

    public function save()
    {

        if ($this->cover_image) {
            $filename = $this->cover_image->store('public/images');
            $imageName = $this->cover_image->hashName();
            $this->aboutUs->cover_image  = $imageName;
        }
        $this->validate();
        if ($this->desktopVideo) {
            $filename = $this->desktopVideo->store('public/videos');
            $videoName = $this->desktopVideo->hashName();
            $this->aboutUs->video = $videoName;
        }
        $this->aboutUs->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل البيانات بنجاح' : 'تم إضافة البيانات بنجاح',
            'url'=> route('about-us.index'),
        ]);
    }
}
