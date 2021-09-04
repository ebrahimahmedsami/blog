<?php

namespace Database\Seeders;

use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::create([
            'title' => 'simple title 1',
            'slug' => Str::slug('simple title 1'),
            'body' => Lorem::paragraph(),
            'image' => 'p2.jpg',
            'user_id' => 1,
            'category_id' => 1,
        ]);

        \App\Models\Post::create([
            'title' => 'simple title 2',
            'slug' => Str::slug('simple title 2'),
            'body' => Lorem::paragraph(),
            'image' => 'p2.jpg',
            'user_id' => 1,
            'category_id' => 1,
        ]);

        \App\Models\Post::create([
            'title' => 'simple title 3',
            'slug' => Str::slug('simple title 3'),
            'body' => Lorem::paragraph(),
            'image' => 'p3.jpg',
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
