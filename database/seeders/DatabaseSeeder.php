<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(AdministratorSeeder::class);
        $this->call(GradesSeeder::class);
        $this->call(HospitalAddressesSeeder::class);
        $this->call(HospitalCitiesSeeder::class);
        $this->call(OrthopedicDoctorsSeeder::class);
        $this->call(OrthopedicImplantsSeeder::class);
        $this->call(OrthopedicTechniciansSeeder::class);
        $this->call(UsersSeeder::class);

    }
}
