<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Post::factory()->count(200)->create();
    }
}
