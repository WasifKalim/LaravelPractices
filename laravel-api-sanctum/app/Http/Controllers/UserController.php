<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = $user->createToken('mytoken')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    // tokens is not defined
    public function logout(Request $request){
        $request->user()->token()->revoke();
        // auth()->user()->tokens()->delete();
        return response([
            'message' => 'Succusfully logout',
        ]);
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
             return response([
                'message'=> 'THe provided credentials are incorrect.'
             ], 401);
        }

        $token = $user->createToken('mytoken')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 200);
    }
}
