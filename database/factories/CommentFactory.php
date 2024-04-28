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
        $comment = Comment::inRandomOrder()->first();
        return [
            'comment_id' => $comment->id,
            'comment' => fake()->paragraph(rand(1, 3)),
        ];
    }
}
