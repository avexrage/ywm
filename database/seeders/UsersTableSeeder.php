<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['id_user' => '3307091204010006', 'nama' => 'Maulana', 'email' => 'a@gmail.com','no_hp' => '085161052901'],
      
        ]);  
    }
}
