<?php

namespace Database\Factories;

use App\Models\PostVote;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostVote>
 */
class PostVoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = PostVote::class;

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
