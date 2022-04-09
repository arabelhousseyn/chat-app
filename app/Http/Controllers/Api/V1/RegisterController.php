<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegisterRequest $request)
    {
        if($request->validated())
        {
            $user = User::create([
                'phone' => $request->phone,
                'email' => (@$request->email) ? $request->email : null,
                'password' => Hash::make($request->password)
            ]);

            if($request->file('avatar'))
            {
                $fileName = uniqid() . '.' . $request->file('avatar')->extension();
                $path = $request->file('avatar')->storeAs('avatars',$fileName);
            }

            $user->profile()->create([
                'fullName' => $request->fullName,
                'avatar' => ($request->file('avatar')) ? $path : null,
                'gender' => $request->gender,
                'dob' => $request->dob
            ]);

            $token = $user->createToken('chat')->plainTextToken;
            $data = User::with('profile')->find($user->id);
            $data['token'] = $token;
            return response($data,200);
        }
    }
}
