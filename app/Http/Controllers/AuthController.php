<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $user = User::create($request->all());
        return response()->json($user);
    }

    public function login(){
        $credentials = request(['email','password']);
        if($token = Auth::attempt($credentials)){
            return response()->json(['error' => 'Acceso no Autorizado'], 401);
        }
        $user = Auth::guard('api')->user();
        return response()->json([
            'token' => $token,
            'user' => $user
        ]);
    }
}
