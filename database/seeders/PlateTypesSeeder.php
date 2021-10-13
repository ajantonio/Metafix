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
            'type' => 'T Buttress Plates',
            'image' => Storage::url('images/t-buttress-plates.jpg')
        ]);

        PlateType::firstOrCreate([
            'type' => 'Neutralization Plates',
            'image' => Storage::url('images/neutralization-plates.jpg')
        ]);

        PlateType::firstOrCreate([
            'type' => 'Bridging Plates',
            'image' => Storage::url('images/bridging-plates.jpg')
        ]);
    }
}
