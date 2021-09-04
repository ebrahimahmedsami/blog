<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Comment::create([
            'body' => 'some comment here man 1',
            'user_id' => 1,
            'post_id' => 1,
        ]);

        \App\Models\Comment::create([
            'body' => 'some comment here man 2',
            'user_id' => 1,
            'post_id' => 2,
        ]);

        \App\Models\Comment::create([
            'body' => 'some comment here man 3',
            'user_id' => 1,
            'post_id' => 3,
        ]);
    }
}
