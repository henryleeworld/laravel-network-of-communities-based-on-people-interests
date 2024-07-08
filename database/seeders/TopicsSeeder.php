<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Topic::create(['name' => 'Programming']);
        Topic::create(['name' => 'Design']);
        Topic::create(['name' => 'SEO']);
        Topic::create(['name' => 'Business']);
        Topic::create(['name' => 'Random']);
    }
}
