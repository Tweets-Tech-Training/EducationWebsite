<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
class RegisterController extends BaseController
{
    public function register()
    {

    }

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            $success['token'] = $authUser->createToken('MyAuthApp')->plainTextToken;
            $success['name'] = $authUser->name;

            return $this->sendResponse($success, 'تم تسجيل الدخول ');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'تأكد من البيانات المدخلة ']);
        }
    }
    public function logout (Request $request) {
        $accessToken = auth()->user()->token();
        $token= $request->user()->tokens->find($accessToken);
        $token->revoke();
        return response(['message' => 'تم تسجيل الخروج بنجاح '], 200);
    }

//
//    public function login(Request $request)
//    {
//        $loginData = $request->validate([
//            'email' => 'email|required',
//            'password' => 'required'
//        ]);
//
//        if (!auth()->attempt($loginData)) {
//            return response(['message' => 'This User does not exist, check your details'], 400);
//        }
//        $accessToken = auth()->user()->createToken('authToken')->accessToken;
//        return response(['user' => auth()->user(), 'access_token' => $accessToken]);
//    }


}
