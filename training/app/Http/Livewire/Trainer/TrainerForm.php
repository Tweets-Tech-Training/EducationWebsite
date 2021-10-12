<?php

namespace App\Http\Livewire\Trainer;

use App\Models\Trainer;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class TrainerForm extends Component
{
    use WithFileUploads ;
    public $trainer , $image , $password;
    public function mount($id = null)
    {
        $this->trainer = $id?Trainer::find($id):new Trainer();
    }

    protected function rules()
    {
        return [
            'trainer.name' => 'required|string',
            'trainer.email' =>  $this->trainer->id?'required|string|email|max:255|unique:trainers,email, '. $this->trainer->id:"required|string|email|max:255|unique:trainers,email",
            'password' => 'required',
            'trainer.image' => 'required',
            'trainer.mobile' =>  $this->trainer->id?'required|string|max:255|unique:trainers,mobile, '. $this->trainer->id:"required|string|max:255|unique:trainers,mobile",

        ];
    }
    public function render()
    {
        return view('livewire.trainer.form')->extends('dashboard_layout.main');
    }

    public function save(){

        if($this->image){
            $filename=$this->image->store('public/images');
            $imagename= $this->image->hashName();
            //$this->image = $imagename;
            $this->trainer->image=$imagename;
        }
        ;
        $this->validate();

        if($this->password){
            $this->trainer->password=Hash::make($this->password);
        }

        $this->trainer->save();

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('trainer')
        ]);


    }
}
