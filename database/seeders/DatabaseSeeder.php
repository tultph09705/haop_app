<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(UserCourseTableSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(LessonSeeder::class);
        $this->call(CourseTagSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(TeacherCourseSeeder::class);
    }
}
