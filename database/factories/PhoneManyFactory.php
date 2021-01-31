<?php

namespace Database\Factories;

use App\Models\PhoneMany;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneManyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhoneMany::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'      => $this->faker->numberBetween(1, 5),
            'phone_number' => $this->faker->unique()->phoneNumber,
        ];
    }
}
