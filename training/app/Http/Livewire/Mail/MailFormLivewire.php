<?php

namespace App\Http\Livewire\Mail;

use App\Mail\TestMail;
use App\Models\Mail as MailModel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class MailFormLivewire extends Component
{

    public  $title , $mail,$ids , $gmail=[] , $message;

    public function mount()
    {
       // dd(request()->all());
        $this->ids = json_decode(request()->input('ids'),true);
//        dd( $this->ids);
//        dd(Str::of($this->ids)->rtrim());
//         json_decode([ids]);
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
       // $ids = Str::of($this->ids)->rtrim();
       // dd($ids);
//        $mail = MailModel::find($this->ids);
//       // dd( $mail);
//        $email=$mail->gmail;
//        Mail::to($email)->send(new TestMail($details));
//
        foreach ($this->ids as $item){
            $mail = MailModel::find($item);
            $email=$mail->gmail;
              //   dd($details , $email);
            Mail::to($email)->send(new TestMail($details));
        }

        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حفظ البيانات  بنجاح',
            'url'=> route('mail'),
        ]);

    }

}
