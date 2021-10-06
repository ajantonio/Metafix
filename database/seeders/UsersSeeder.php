<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'username' => 'admin',
            'password' => bcrypt('password'),
            'administrator_id' => 1,
            'orthopedic_doctors_id' => 0
        ]);

        User::firstOrCreate([
            'username' => 'ajantonio',
            'password' => bcrypt('password'),
            'administrator_id' => 0,
            'orthopedic_doctors_id' => 1
        ]);
    }
}
