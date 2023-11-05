<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->randomElement(['This Comment', 'That Comment', 'Some Comment']),
            'message' => $this->faker->randomElement(['A Message', 'Some Message', 'Another Message']),
            'post_id' => \App\Models\Post::inRandomOrder()->first()->id,
        ];
    }
}
