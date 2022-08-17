<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Courses;
use App\Models\Tag;

class CourseTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "course_id" => $this->faker->randomElement(Courses::pluck('id')),
            "tag_id" => $this->faker->randomElement(Tag::pluck('id')),
        ];
    }
}
