<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class akunseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(dirname(__FILE__) . "../data protestan fix.csv", "r");
        echo dirname(__FILE__);
        while (($data = fgetcsv($file, 300, ';')) !== false) {
            // print_r($data);
            $token = uniqid();
            User::create([
                'nim' => $data[0],
                'name' => $data[1],
                'angkatan' => $data[2],
                'prodi' => $data[3],
                'email' => $data[4],
                'password' => bcrypt($data[5]),
                'passcode' => $data[5],
                'tgl' => $data[6],
                'token' => $token,
                'pilih' =>0,
            ]);
        }
    }
}
