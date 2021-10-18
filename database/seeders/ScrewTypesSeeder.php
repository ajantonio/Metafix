<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\ScrewType;

class ScrewTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScrewType::firstOrCreate([
            'type' => 'Cortical Screws'
        ]);

        ScrewType::firstOrCreate([
            'type' => 'Cancellous Screws'
        ]);

        ScrewType::firstOrCreate([
            'type' => 'Cannulated Screws'
        ]);
    }
}
