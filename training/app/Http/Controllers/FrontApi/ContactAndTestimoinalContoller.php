<?php

namespace App\Http\Controllers\FrontApi;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\TestimonialResource;
use App\Models\ContactUs;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class ContactAndTestimoinalContoller extends BaseController
{
    public function displayTestimonial(){
        $testimonial =Testimonial::get();
        return $this->sendResponse(TestimonialResource::collection($testimonial), 'عرض كل الاراء ');
    }

    public function send(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'name' => 'required',
            'email'=>'required|email',
            'mobile'=>'required|digits:10',
            'message'=>'required'
        ]);
        $contact=ContactUs::create($data);
        //  dd($contact);
        $messageresponse ='تم ارسال البيانات بنجاح ';
        return $this->sendResponse($contact, 'تم ارسال البيانات بنجاح  ');
    }
}
