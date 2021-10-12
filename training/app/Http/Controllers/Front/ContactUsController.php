<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactUsController extends Controller
{

    public function index()
    {
        return view('layouts.front.contact-us');
    }


    public function send(Request $request)
    {
            $data = $request->all();
        $this->validate($request,[
            'name' => 'required',
            'email'=>'required|email',
            'mobile'=>'required|digits:10',
            'message'=>'required'
        ],[],[]);
        $contact=ContactUs::create($data);
      //  dd($contact);
            $messageresponse =response()->json(['success'=>'تم ارسال البيانات بنجاح ']);
            return $messageresponse;
        }

}
