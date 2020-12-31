<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Game;
use Faker\Generator as Faker;


use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GameFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name' => rtrim($this->faker->sentence(rand(2, 6)), "."),
            'desc' => $this->faker->paragraphs(rand(1, 3), true),
            'purpose' =>  $this->faker->paragraphs(rand(1, 2), true),

        ];
    }
}
