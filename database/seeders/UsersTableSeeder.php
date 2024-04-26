<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'id_user' => '3307091204010006', 
            'nama' => 'sidqi', 
            'email' => 'poayof@gmail.com', 
            'password' =>Hash::make('123456'),
            'no_hp' => '085161052931'
            
            ]

        );  
    }
}
