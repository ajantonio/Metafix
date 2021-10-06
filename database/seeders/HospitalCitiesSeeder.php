<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HospitalCity;

class HospitalCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HospitalCity::firstOrCreate([
            'city' => 'San Fernando'
        ]);

        HospitalCity::firstOrCreate([
            'city' => 'Angeles'
        ]);
    }
}
