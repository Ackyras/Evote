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
        $file = fopen(dirname(__FILE__) . "../users.csv", "r");
        echo dirname(__FILE__);
        while (($data = fgetcsv($file, 200, ';')) !== false) {
            // print_r($data);
            $token = uniqid();
            echo $data[1];
            User::create([

                'name' => $data[1],
                'email' => $data[2],
                'prodi' => $data[5],
                'password' => bcrypt($data[3]),
                'nim' => $data[6],
                'token' => $token

            ]);
        }
    }
}
