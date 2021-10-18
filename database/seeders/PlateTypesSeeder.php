<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\PlateType;

class PlateTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PlateType::firstOrCreate([
            'type' => 'T Buttress Plates'
        ]);

        PlateType::firstOrCreate([
            'type' => 'Neutralization Plates'
        ]);

        PlateType::firstOrCreate([
            'type' => 'Bridging Plates'
        ]);
    }
}
