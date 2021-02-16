<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Jorge I. Meza",
            'email' => 'jimezam@autonoma.edu.co',
            'password' => Hash::make(''),
        ]);

        DB::table('users')->insert([
            'name' => "JUAN DAVID",
            'picture' => "https://consejoescolar.es/images/2019/02/15/esta-persona-no-existe.jpg",
            'email' => 'otaku@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}
