<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HospitalAddress;

class HospitalAddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HospitalAddress::firstOrCreate([
            'address' => 'V.L. Makabali Memorial Hospital Inc.',
            'hospital_cities_id' => '1'
        ]);

        HospitalAddress::firstOrCreate([
            'address' => 'Jose B. Lingad Memorial Regional Hospital',
            'hospital_cities_id' => '1'
        ]);

        HospitalAddress::firstOrCreate([
            'address' => 'San Fernandino Hospital',
            'hospital_cities_id' => '1'
        ]);

        HospitalAddress::firstOrCreate([
            'address' => 'Mother Teresa of Calcutta Medical Center',
            'hospital_cities_id' => '1'
        ]);

        HospitalAddress::firstOrCreate([
            'address' => 'Ricardo P. Rodriguez Memorial Hospital',
            'hospital_cities_id' => '1'
        ]);

        HospitalAddress::firstOrCreate([
            'address' => 'Angeles University Foundation Medical Center',
            'hospital_cities_id' => '2'
        ]);

        HospitalAddress::firstOrCreate([
            'address' => 'Angeles City Birthing Station',
            'hospital_cities_id' => '2'
        ]);

        HospitalAddress::firstOrCreate([
            'address' => 'Lifeline Medical Center',
            'hospital_cities_id' => '2'
        ]);

        HospitalAddress::firstOrCreate([
            'address' => 'Ona Hospital',
            'hospital_cities_id' => '2'
        ]);

        HospitalAddress::firstOrCreate([
            'address' => 'Sacred Heart Hospital',
            'hospital_cities_id' => '2'
        ]);
    }
}
