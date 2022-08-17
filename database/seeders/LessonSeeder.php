<?php

namespace Database\Seeders;

use App\Models\Lessons;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lessons::factory()->time(20)->create();
    }
}
