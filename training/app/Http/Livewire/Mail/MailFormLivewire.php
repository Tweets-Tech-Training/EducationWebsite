<?php

namespace App\Http\Livewire\Mail;

use App\Mail\TestMail;
use App\Models\Mail as MailModel;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class MailFormLivewire extends Component
{

    public  $title , $mail,  $gmail=[] , $message;

    public function mount()
    {

         json_decode([ids]);
    }
    protected $rules = [
        'title'=>'required',
        'message'=>'required',
    ];
    public function render()
    {
        return view('livewire.mail.mail-form-livewire')->extends('dashboard_layout.main');
    }
    public function save()
    {
        // dd($this->mail_id);
//        if ($this->mail_id) {

        $this->validate([
            'title' => 'required',
            'message' => 'required',
        ]);
        $details = [
            'title' => $this->title,
            'message' => $this->message
        ];

//        $mail = MailModel::find($this->gmail);
//        $email=$mail->gmail;
//        Mail::to($email)->send(new TestMail($details));
//        dd( $mail);
        foreach ($this->gmail as $item){
            $mail = MailModel::find($item);
            $email=$mail->gmail;
//                 dd($details , $email);
            Mail::to($email)->send(new TestMail($details));
        }

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حفظ البيانات  بنجاح',
            'url'=> route('mail'),
        ]);

    }

}
