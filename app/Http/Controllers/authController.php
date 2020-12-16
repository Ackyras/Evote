<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class authController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credential = $request->only('email', 'password');
        $cek = DB::table('users')->where('email', '=', $request->input('email'))->first();
        if ($cek->pilih != 0) {
            return redirect()->route('login')->with('msg', 'Anda sudah memilih!');
        }
        if (!Auth::attempt($credential)) {
            return redirect()->route('login');
        } else {
            return redirect()->route('home');
        }
    }

    public function logout(Request $req)
    {
        $req->session()->flush();
        Auth::logout();
        return Redirect()->route('home');
    }
}
