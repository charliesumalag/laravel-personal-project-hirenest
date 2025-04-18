<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobseeker>
 */
class JobseekerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->state(['role' => 'jobseeker']),
            'resume' => fake()->text(20),
            'skills' => fake()->words(5, true),
            'experience' => fake()->sentence(6),
        ];
    }
}
