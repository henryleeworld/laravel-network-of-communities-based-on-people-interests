<?php

namespace Database\Factories;

use App\Models\Community;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Community>
 */
#[UseModel(Community::class)]
class CommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->text(50);

        return [
            'name' => $name,
            'user_id' => rand(1, 100),
            'description' => fake()->text(200),
            'slug' => Str::slug($name, language: app()->getLocale())
        ];
    }
}
