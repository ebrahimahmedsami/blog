<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'name' => 'html course',
            'slug' => 'html-course',
        ]);
        \App\Models\Category::create([
            'name' => 'css course',
            'slug' => 'css-course',
        ]);
        \App\Models\Category::create([
            'name' => 'js course',
            'slug' => 'js-course',
        ]);
        \App\Models\Category::create([
            'name' => 'php course',
            'slug' => 'php-course',
        ]);
        \App\Models\Category::create([
            'name' => 'ruby course',
            'slug' => 'ruby-course',
        ]);
    }
}
