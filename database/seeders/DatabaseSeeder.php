<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Advertisement;
use App\Models\Comment;
use App\Models\Community;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user= User::factory()->count(4)->create();

        $post= Post::factory()->count(4)->create();

        $comment= Comment::factory()->count(4)->create();

        $community= Community::factory()->count(4)->create();

        $advertisement= Advertisement::factory()->count(2)->create();





    }
}
