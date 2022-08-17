<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeacherCourse;

class TeacherCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeacherCourse::factory()->times(20)->create();
    }
}
