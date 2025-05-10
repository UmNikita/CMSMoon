<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function show() {
        return view('login');
    }
    public function login(Request $request) {
        $data = $request->only(['login', 'password', 'remember']);
        $login = $data['login'];
        $password = $data['password'];
        $remember = $data['remember'];
        if(Auth::attempt(['name'=>$login, 'password'=>$password], $remember)) {
            return response()->json(['message' => 'done']);
        }
        else {
            return response()->json(['message' => 'err']);
        }
    }
}
