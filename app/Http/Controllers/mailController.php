<?php

namespace App\Http\Controllers;

use App\Mail\send;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class mailController extends Controller
{
    public function sendEmail()
    {
        $jumlah = DB::table('users')->count();
        $data = DB::table('users')->get();
        $i = 0;
        while ($i < $jumlah) {
            $details = [
                'username' => '{{$data[$i}->email}}',
                'password' => '{{$data[$i]->password}}'
            ];

            Mail::to($data[$i]->email)->send(new send($details));
            $i++;
        }
        return "email sent";
    }
}
