<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
            // 'category_id' => $this->faker->randomDigit(1, 5),
            'category_id' => Category::all()->random()->id,
            // 'user' => $this->faker->randomDigit(1, 100)
            'user_id' => User::all()->random()->id //Recoge un id random del modelo user.
        ];
    }
}
