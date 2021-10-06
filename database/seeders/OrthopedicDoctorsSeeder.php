<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrthopedicDoctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrthopedicDoctorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrthopedicDoctor::factory()->times(1)->create();   
    }
}
