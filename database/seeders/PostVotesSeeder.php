<?php

namespace Database\Seeders;

use App\Models\PostVote;
use Illuminate\Database\Seeder;

class PostVotesSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        PostVote::factory()->count(500)->create();
    }
}
