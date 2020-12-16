<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class hasilController extends Controller
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
        $calon1 = DB::table('voting')->find(1);
        $calon2 = DB::table('voting')->find(2);
        $user = Auth::user();
        $datac1 = $calon1->total;
        $datac2 = $calon2->total;
        if ($calon == 1) {
            $datac1++;
            DB::table('users')->find($user->id)->update([
                'pilih' => 1,
            ]);
            $data = DB::table('voting')->find(1)->update([
                'total' => $datac1,
            ]);
        } else if ($calon == 2) {
            $datac2++;
            DB::table('users')->find($user->id)->update([
                'pilih' => 2,
            ]);
            $data = DB::table('voting')->find(2)->update([
                'total' => $datac2,
            ]);
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
