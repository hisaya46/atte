<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Attendance;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    protected $model = Attendance::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'date' => $this->faker->dateTimeBetween('-3 years', 'now')->format('Y-m-d'),
            'start_time' => $this->faker->time('H:i:s'),
            'end_time' => $this->faker->time('H:i:s'),
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
        ];
    }
}