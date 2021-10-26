<?php

namespace App\Http\Livewire\TrainerAdmin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class TrainerProfile extends Component
{
    use WithFileUploads;

    public $image,$user , $password;
    public function mount()
    {
        $this->user = Auth::guard('trainer')->user();
//        dd($this->user);
    }
    public $rules=[
        'user.name' => 'required',
        'user.email' => 'required',
        'user.image' => 'nullable',
        'user.mobile' => 'nullable',
        'user.address' => 'nullable',
        'user.facebook' => 'nullable',
    ];

    public function save()
    {
        $this->validate([
            'user.name' => 'required',
        ]);

        if($this->image){
            $filename=$this->image->store('public/images');
            $imagename= $this->image->hashName();
            //$this->image = $imagename;
            $this->user->image=$imagename;
            $this->user->save([
                'user.image' => $imagename,
            ]);
        }


        if($this->password){
            $this->user->update([
                'password' => Hash::make($this->password),
            ]);
        }
        $this->user->update([
            'user.name' => $this->user->name,
        ]);
        $this->user->update([
            'user.mobile' => $this->user->mobile,
        ]);
        $this->user->update([
            'user.facebook' => $this->user->facebook,
        ]);
        $this->user->update([
            'user.email' => $this->user->email,
        ]);
        $this->user->update([
            'user.address' => $this->user->address,
        ]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' =>'تم حفظ البيانات  بنجاح',
            'url'=>route('trainer-courses')
        ]);

        return redirect()->back();

    }

    public function render()
    {
        return view('livewire.trainer-admin.trainer-profile')->extends('edomi_dashboard_layout.main');
    }
}
