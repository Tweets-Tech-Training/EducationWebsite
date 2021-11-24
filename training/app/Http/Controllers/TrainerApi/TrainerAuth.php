<?php

namespace App\Http\Controllers\TrainerApi;

use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\TrainerResource;
use App\Models\Trainer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class TrainerAuth extends BaseController
{
         public function login(Request $request){
//             if (auth('trainer-api')->attempt(['email' => $request->email, 'password' => $request->password])) {
           $user = Trainer::where('email',request('email'))->first();
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
        return $this->sendResponse(new TrainerResource($authUser) , 'تم تسجيل الدخول ');
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
      //  dd($request->password);

        $authUser->update($data);
        if($request->password){

            //  dd( $authUser->password);
            $authUser->update([
                $authUser->password = Hash::make($request->password),
            ]);
        }
        return $this->sendResponse(new TrainerResource($authUser) , 'تم تسجيل الدخول ');
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'تم تسجيل الخروج بنجاح']);
    }




}
