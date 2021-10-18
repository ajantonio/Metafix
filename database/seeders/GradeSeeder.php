<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::firstOrCreate([
            'grade_name' => 'Titanium'
        ]);

        Grade::firstOrCreate([
            'grade_name' => 'Stainless'
        ]);
    }
}
