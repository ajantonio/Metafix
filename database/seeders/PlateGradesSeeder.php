<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlateGrade;

class PlateGradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlateGrade::firstOrCreate([
            'grade_name' => 'Titanium'
        ]);

        PlateGrade::firstOrCreate([
            'grade_name' => 'Stainless'
        ]);
    }
}
