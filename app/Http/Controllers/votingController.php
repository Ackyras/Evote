<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class votingController extends Controller
{
    public function index()
    {
        $data1 = DB::table('voting')->find(1);
        $data2 = DB::table('voting')->find(2);

        return view('hasil', ['data1' => $data1, 'data2' => $data2]);
    }

    public function vote(Request $req)
    {
        $calon = $req->input('vote');
        $user = Auth::user()->id;
        $pilih = Auth::user()->pilih;
        if ($pilih != 0) {
            return redirect()->route('logout');
        }
        if ($calon == 1) {
            try {
                DB::table('voting')->increment('calon1');
                DB::table('users')->where('id', $user)->update([
                    'pilih' => 1,
                ]);
            } catch (Exception $th) {
                return redirect()->route('logout')->with('msg', 'Anda gagal memilih, silahkan login kembali');
            }
            return redirect()->route('logout')->with('msg', 'Anda berhasil memilih');
        } else if ($calon == 2) {
            try {
                DB::table('voting')->increment('calon2');
                DB::table('users')->where('id', $user)->update([
                    'pilih' => 2,
                ]);
            } catch (Exception $th) {
                return redirect()->route('logout')->with('msg', 'Anda gagal memilih, silahkan login kembali');
            }
            return redirect()->route('logout')->with('msg', 'Anda berhasil memilih');
        } else {
            return redirect()->route('logout');
        }
    }

    public function voteShow($id)
    {
        if (Auth::check()) {
            $data = DB::table('voting')->find($id);
            if ($id == 1 || $id == 2) {
                return view('Voting', ['data' => $id]);
            } else {
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login');
        }
    }
}
