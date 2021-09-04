<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'site_name' => 'hima site',
            'contact_email' => 'himasami0000@gmail.com',
            'address' => 'Mansoura',
        ]);
    }
}
