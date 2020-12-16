<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Mail\sendmail;

class mailController extends Controller
{
    public function Send()
    {
        $jumlah = DB::table('users')->count();
        $data = DB::table('users')->get();
        $i = 0;
        while ($i < $jumlah) {
            $details = [
                'username' => $data[$i]->email,
                'password' => $data[$i]->password,
            ];
            Mail::to($data[$i]->email)->send(new sendmail($details));
            $i++;
        }
        return "Success";
    }
}
