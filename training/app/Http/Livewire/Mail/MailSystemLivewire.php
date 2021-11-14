<?php

namespace App\Http\Livewire\Mail;

use Livewire\Component;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Models\Mail as MailModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Livewire\WithPagination;

class MailSystemLivewire extends Component
{
    use WithPagination ;
    protected $paginationTheme = 'bootstrap';
    public $search , $title ,  $gmail=[], $mail_id , $message;
    public $deleteId = '';
    public function render()
    {

        return view('livewire.mail.mail-system-livewire',
        ['emails'=>MailModel::orderby('id','desc')->paginate(5) ])->extends('dashboard_layout.main');
    }


    public function deleteId($id)
    {
        $this->deleteId = $id;
    }
    public function delete()
    {
        MailModel::find($this->deleteId )->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'تم حذف الايميل بنجاح',
        ]);
    }

    public function create()
    {
//        $this->reset();
//        $mail=MailModel::findorfail($id);
//        $this->mail_id = $id;
//        $this->gmail=$mail->gmail;
//        dd($this->mail_id);

        $this->emit('modalShow','#CreateHallModal');
    }
    public function store()
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
//        dd( $this->gmail);
            foreach ($this->gmail as $item){
                $mail = MailModel::find($item);
                $email=$mail->gmail;
           //     dd($details , $email);
                Mail::to($email)->send(new TestMail($details));
            }
//              $mail = MailModel::find($this->mail_id);
//            //dd($details , $this->gmail);
//            Mail::to($this->gmail)->send(new TestMail($details));
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'message' => 'تم حفظ البيانات  بنجاح',
            ]);
            $this->emit('modalHide', '#CreateHallModal');
            $this->reset();
        }


        public function redirectToMyMail(){
        return redirect()->to('training/admin/mail/create?ids='.json_encode($this->gmail));
        }
//    }
}
