<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $Group = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->text(),
            'commentable' => $this->faker->text(),
            // 'user' => $this->faker->randomDigit(1, 100)
            'user_id' => User::all()->random()->id //Recoge un id random del modelo user.
        ];
    }
}
