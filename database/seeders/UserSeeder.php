<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'himasami',
            'email' => 'himasami0000@gmail.com',
            'password' => bcrypt('00000000'),
            'profile_img' => 'user.png',
        ]);
    }
}
