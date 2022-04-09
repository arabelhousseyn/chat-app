<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(LoginRequest $request)
    {
        if($request->validated())
        {
            if(Auth::attempt($request->only('phone','password')))
            {
                $user = Auth::user();
                $token = $user->createToken('chat')->plainTextToken;
                $data = User::with('profile')->find(Auth::id());
                $data['token'] = $token;
                return response($data,200);
            }else{
                return response(['message' => __('message.failed')],401);
            }
        }
    }
}
