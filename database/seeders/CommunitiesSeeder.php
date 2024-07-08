<?php

namespace Database\Seeders;

use App\Models\Community;
use Illuminate\Database\Seeder;

class CommunitiesSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Community::factory()->count(50)->create();
    }
}
