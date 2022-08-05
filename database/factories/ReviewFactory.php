<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;
use App\Models\User;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => $this->faker->randomElement(Courses::pluck('id')),
            'parent_id' => $this->faker->numberBetween(0, 10),
            'user_id' => $this->faker->randomElement(User::pluck('id')),
            'message' => $this->faker->text(100),
            'rate' => $this->faker->numberBetween(0, 5),
        ];
    }
}
