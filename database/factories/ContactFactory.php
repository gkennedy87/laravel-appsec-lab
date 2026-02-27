<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'first_name'      => fake()->firstName(),
        'last_name'       => fake()->lastName(),
        'title'           => fake()->jobTitle(),
        'email'           => fake()->unique()->safeEmail(),
        'phone'           => fake()->phoneNumber(),
        'last_contacted'  => fake()->dateTimeBetween('-1 month', 'now'),
        'organization_id' => Organization::factory(),
    ];
    }
}
