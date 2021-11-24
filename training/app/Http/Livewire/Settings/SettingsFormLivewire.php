<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting as SettingModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class SettingsFormLivewire extends Component
{
    use WithFileUploads ;
    public $image ,$setting ,  $images,   $isUpdate=0;
    protected $rules = [
        'setting.site_name'=>'required',
        'setting.logo'=>'required',
        'setting.image'=>'required',
        'setting.place'=>'required',
        'setting.mobile'=>'required|digits:10',
        'setting.email'=>'required|email',
        'setting.facebook'=>'nullable|url',
        'setting.instagram'=>'nullable|url',
        'setting.twitter'=>'nullable|url',
        'setting.whatsapp'=>'required',
        'setting.youtube'=>'nullable|url',

    ];
    public function mount(){
        $this->setting = SettingModel::first() ;
        $this->setting !=null ? $this->isUpdate=1 : $this->isUpdate=0 ;
        return $this->setting =$this->setting ? SettingModel::first() : new SettingModel();
//        return $this->setting =$id ? SettingModel::first():new SettingModel();

    }
    public function render()
    {
        return view('livewire.settings.form')->extends('dashboard_layout.main');
    }
    public function save()
    {
        if ($this->image ) {
            $filename = $this->image->store('public/images');
            $imageName = $this->image->hashName();
            $this->setting->logo = $imageName;
        }
        if ($this->images ) {
            $filename = $this->images->store('public/images');
            $imageName = $this->images->hashName();
            $this->setting->image = $imageName;
        }
        $this->validate();
        $this->setting->save();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => $this->isUpdate ? 'تم تعديل الإعدادات بنجاح' : 'تم إضافة الإعدادات بنجاح',
            'url'=> route('settings.index'),
        ]);
    }
}
