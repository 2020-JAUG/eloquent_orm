<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'instagram' => $this->faker->userName(),
            'github' => $this->faker->userName(),
            'web' => $this->faker->url(),
            'user_id' => User::all()->random()->id
        ];
    }
}
