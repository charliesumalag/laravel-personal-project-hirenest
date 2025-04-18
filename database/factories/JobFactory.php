<?php

namespace Database\Factories;

use App\Models\Job;
use App\Models\User;
use League\CommonMark\Node\Block\Paragraph;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'description' => fake()->paragraph(10),
            'salary' => fake()->numberBetween(15_000, 150_000),
            'location' => fake()->city(),
            'jobtypes' => fake()->randomElement(Job::$jobtypes),
            'experience' => fake()->randomElement(Job::$experience),
            'company_id' => \App\Models\Company::factory(),
            'posted_by' => User::inRandomOrder()->first()->id,
        ];
    }
}
