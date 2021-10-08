<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrthopedicImplant;

class OrthopedicImplantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrthopedicImplant::create([
            'screw_types_id' => 1,
            'screw_grades_id' => 1,
            'screw_price' => 1200,
            'plate_types_id' => null,
            'plate_grades_id' => null,
            'plate_price' => null,
            'diameter' => null,
            'length' => '3.5mm',
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => 2,
            'screw_grades_id' => 2,
            'screw_price' => 1050,
            'plate_types_id' => null,
            'plate_grades_id' => null,
            'plate_price' => null,
            'diameter' => null,
            'length' => '6.5mm',
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => 3,
            'screw_grades_id' => 2,
            'screw_price' => 850,
            'plate_types_id' => null,
            'plate_grades_id' => null,
            'plate_price' => null,
            'diameter' => null,
            'length' => '6.5mm',
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => null,
            'screw_grades_id' => null,
            'screw_price' => null,
            'plate_types_id' => 1,
            'plate_grades_id' => 1,
            'plate_price' => 8750,
            'diameter' => '3.0mm',
            'length' => null,
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => null,
            'screw_grades_id' => null,
            'screw_price' => null,
            'plate_types_id' => 2,
            'plate_grades_id' => 2,
            'plate_price' => 6500,
            'diameter' => '3.0mm',
            'length' => null,
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => null,
            'screw_grades_id' => null,
            'screw_price' => null,
            'plate_types_id' => 3,
            'plate_grades_id' => 1,
            'plate_price' => 9650,
            'diameter' => '3.0mm',
            'length' => null,
        ]);

    }
}
