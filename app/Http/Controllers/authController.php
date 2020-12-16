<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request()->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]);
        $credential = $request->only('username', 'password');
        if(!Auth::attempt($credential)){
            return redirect()->route('login');
        }else{
            return route('home');
        }
    }
}
