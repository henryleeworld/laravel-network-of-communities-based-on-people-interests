<?php

namespace Database\Factories;

use App\Models\PostVote;
use Illuminate\Database\Eloquent\Factories\Attributes\UseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PostVote>
 */
#[UseModel(PostVote::class)]
class PostVoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $votes = [-1, 1];
        return [
            'post_id' => rand(1, 200),
            'user_id' => rand(1, 100),
            'vote' => $votes[rand(0, 1)]
        ];
    }
}
