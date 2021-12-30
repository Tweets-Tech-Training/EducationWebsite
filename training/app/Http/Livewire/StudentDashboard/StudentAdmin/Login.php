<?php

namespace App\Http\Livewire\StudentDashboard\StudentAdmin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $student , $email ,$password ;
    protected $rules = [
        'email'=>'required',
        'password'=>'required',
    ];
    public function render()
    {
        return view('livewire.studentDashboard.student-admin.login')->extends('front_layout.main_student');
    }
    public function login()
    {

//        dd('riham');
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

//        if(Auth::guard('student')->attempt(array('email' => $this->email, 'password' => $this->password))){
        if(\auth('student')->attempt(array('email' => $this->email, 'password' => $this->password))){
        session()->flash('message', "تم تسجيل الدخول بنجاح ");
            return redirect()->route('student-profile');
        }
        elseif(\auth('trainer')->attempt(array('email' => $this->email, 'password' => $this->password))){
            session()->flash('message', "تم تسجيل الدخول بنجاح ");
            return redirect()->route('profile');
        }else{
            session()->flash('error', 'الايميل او كلمة المرور غير صحيحة ');
        }
    }
}
