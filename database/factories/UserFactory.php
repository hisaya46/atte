<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'mail_address' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(),
            'created_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
        ];
    }
}