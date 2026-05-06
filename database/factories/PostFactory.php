<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
#[UseModel(Post::class)]
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'community_id' => rand(1, 50),
            'user_id' => rand(1, 100),
            'title' => fake()->text(50),
            'post_text' => fake()->text(500),
        ];
    }
}
