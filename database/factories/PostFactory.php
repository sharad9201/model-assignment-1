<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'position' => fake()->name(),
            'status' => fake()->name(),
            'description' => fake()->text(),
            'title' => fake()->text(),
            'user_id' => User::factory()->create()->id,

        ];
    }
}
