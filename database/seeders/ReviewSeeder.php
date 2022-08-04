<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reviews;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reviews::factory()->count(20)->create();
    }
}
