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
            'type' => 'Cortical Screws',
            'image' => Storage::url('public/images/cortical-screws.jpg')
        ]);

        ScrewType::firstOrCreate([
            'type' => 'Cancellous Screws',
            'image' => Storage::url('public/images/cancellous-screws.jpg')
        ]);

        ScrewType::firstOrCreate([
            'type' => 'Cannulated Screws',
            'image' => Storage::url('public/images/cannulated-screws.png')
        ]);
    }
}