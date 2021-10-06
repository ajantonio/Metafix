<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrthopedicTechnician;

class OrthopedicTechniciansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrthopedicTechnician::factory()->times(5)->create();
    }
}
