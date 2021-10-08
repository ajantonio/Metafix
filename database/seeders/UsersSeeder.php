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
            'name' => 'George Washington',
            'username' => 'admin',
            'password' => bcrypt('password'),
            'status' => null,
            'email' => 'admin@yahoo.com',
            'contact_number' => '09736136410',
            'is_admin' => 1
        ]);

        User::firstOrCreate([
            'name' => 'Adrian John Antonio',
            'username' => 'ajantonio',
            'password' => bcrypt('password'),
            'status' => 'accepted',
            'email' => 'ajantonio@yahoo.com',
            'contact_number' => '09771831344',
            'is_admin' => 0
        ]);
    }
}
