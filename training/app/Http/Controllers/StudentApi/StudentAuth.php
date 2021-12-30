<?php

namespace App\Http\Controllers\StudentApi;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class StudentAuth extends BaseController
{
    public function login(Request $request){
//             if (auth('trainer-api')->attempt(['email' => $request->email, 'password' => $request->password])) {
        $user = Student::where('email',request('email'))->first();
        if(!$user || !\Hash::check(request('password'), $user->password) ){

            return $this->sendError('Unauthorised.', ['error' => 'تأكد من البيانات المدخلة ']);
        }
        $success['token'] = $user->createToken('MyAuthApp')->plainTextToken;
        $success['name'] = $user->name;
        return $this->sendResponse($success, 'تم تسجيل الدخول ');
    }
    public function getDetails()
    {
        $authUser = Auth::user();
        // dd($authUser);
        return $this->sendResponse(new StudentResource($authUser) , 'تم تسجيل الدخول ');
    }
    public function updateProfile(Request $request)
    {
        $data=$request->all();
        $authUser = Auth::user();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'nullable',
            'mobile' => 'nullable',
            'address' => 'nullable',
        ]);
//        dd($request->password);
        if($request->image){
            $imagePath = $data['image']->store('public/images');
            $data['image'] = $request->image->hashName();
        }
        $authUser->update($data);
        if($request->password){
            $authUser->update([
                $authUser->password = Hash::make($request->password),
            ]);
        }
        return $this->sendResponse(new StudentResource($authUser) , 'تم تسجيل الدخول ');
    }
}
