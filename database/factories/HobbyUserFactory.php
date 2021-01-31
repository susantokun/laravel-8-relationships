<?php

namespace Database\Factories;

use App\Models\HobbyUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class HobbyUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HobbyUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'  => $this->faker->numberBetween(1, 5),
            'hobby_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
