<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'category' => $this->faker->randomDigit(1,5),
            'user' => $this->faker->randomDigit(1,5)
        ];
    }
}
