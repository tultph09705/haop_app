<?php

namespace Database\Factories;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseTeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id" => $this->faker->randomElement(User::where('role', config('roles.teacher'))->pluck('id')),
            "course_id" => $this->faker->randomElement(Courses::pluck('id')),
        ];
    }
}
