<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactUsController extends Controller
{

    public function index()
    {
        $setting=Setting::get();
        return view('layouts.front.contact-us')->with('setting' , $setting);
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
