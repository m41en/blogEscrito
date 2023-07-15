<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
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
            'fk_id_user' => User::all()->random()->id_user,
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph()
        ];
    }
}
