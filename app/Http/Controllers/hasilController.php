<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hasilController extends Controller
{
    public function index()
    {
        $data = DB::table('voting')->first();


        return view('hasil', ['data' => $data]);
    }

    public function vote(Request $req)
    {
        $calon = $req->input('vote');
        $calon1 = DB::table('voting')->first();
        $datac1 = $calon1->calon1;
        $datac2 = $calon1->calon2;
        if ($calon == 1) {
            $datac1++;
            $data = DB::table('voting')->update([
                'calon1' => $datac1,
            ]);
        } else if ($calon == 2) {
            $datac2++;
            $data = DB::table('voting')->update([
                'calon2' => $datac2,
            ]);
        } else {
            return redirect()->route('home');
        }
    }

    public function voteShow($id)
    {
        $data = DB::table('voting')->first();
        if ($id == 1 || $id == 2) {
            return view('Voting', ['data' => $id]);
        } else {
            return redirect()->route('home');
        }
    }
}
