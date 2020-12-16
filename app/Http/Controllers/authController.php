<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class authController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credential = $request->only('email', 'password');
        if (!Auth::attempt($credential)) {
            dd("berhasil");
            return redirect()->route('login');
        } else {
            return redirect()->route('hasil');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        Auth::logout();
        return Redirect()->route('login');
    }
}
