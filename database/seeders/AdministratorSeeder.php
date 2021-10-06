<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Administrator;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrator::firstOrCreate([
            'name' => 'Adrian John Antonio'
        ]);
    }
}
