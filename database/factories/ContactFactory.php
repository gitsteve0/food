<?php

namespace Database\Factories;

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
    public function definition()
    {
        $name = fake()->name();
        return [
            'name' => $name,
            'phone' => rand(60000000, 65999999),
            'email' => fake()->unique()->safeEmail(),
            'message' => str('Its me ' . $name . '. I will order something'),
        ];
    }
}
