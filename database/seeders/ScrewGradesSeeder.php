<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScrewGrade;

class ScrewGradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScrewGrade::firstOrCreate([
            'grade_name' => 'Titanium'
        ]);

        ScrewGrade::firstOrCreate([
            'grade_name' => 'Stainless'
        ]);
    }
}
