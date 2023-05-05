<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $levels = ['Gold', 'Green'];
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(8, 20),
            'level' => $levels[rand(0, 1)],
            'points' => $this->faker->numberBetween(0, 300),
        ];
    }
}
