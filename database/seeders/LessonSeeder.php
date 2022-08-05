<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lessons;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lessons::factory()->count(20)->create();
    }
}
