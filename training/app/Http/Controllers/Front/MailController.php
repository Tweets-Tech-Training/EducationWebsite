<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use App\Mail\Mail as Subscribe;
use App\Models\Mail as MailModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function send(Request $request)
    {
        //   dd($request);
        $data = $request->all();
        $this->validate($request, [
            'gmail' => 'required|email',
        ], [], []);

        $details=[
          'title' => 'from Riham',
            'message' => 'testing mail system'
        ];
        $gmail = $request->all()['gmail'];
        MailModel::create($data);
        Mail::to($gmail)->send(new TestMail($details));
        $messageresponse =response()->json(['success'=>'تم ارسال البيانات بنجاح ']);
        return $messageresponse;
        /*
        $subscriber = MailModel::create($data);
        $gmail = $request->all()['gmail'];
        if ($subscriber) {
            Mail::to($gmail)->send(new Subscribe($gmail));
            $messageresponse =response()->json(['success'=>'تم ارسال البيانات بنجاح ']);
            return $messageresponse;

        }*/
    }
}
