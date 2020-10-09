<?php

namespace Database\Seeders;

use App\Models\Pain;
use Illuminate\Database\Seeder;

class PainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pain::factory()->count(20)->create();
    }
}
