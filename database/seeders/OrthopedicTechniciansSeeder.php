<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrthopedicTechnician;
use Illuminate\Support\Facades\Storage;


class OrthopedicTechniciansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrthopedicTechnician::firstOrCreate([
            'name' => 'Martin Leewunherok',
            'image' => 'public/images/technician-1.jpg',
            'contact_number' => '09946135619',
            'status' => 'On hold'
        ]);


        OrthopedicTechnician::firstOrCreate([
            'name' => 'Big Van Zhong',
            'image' => 'public/images/technician-2.jpg',
            'contact_number' => '09748376839',
            'status' => 'On hold'
        ]);


        OrthopedicTechnician::firstOrCreate([
            'name' => 'Harry Gonzales',
            'image' => 'public/images/technician-3.jpg',
            'contact_number' => '09760183547',
            'status' => 'On hold'
        ]);


        OrthopedicTechnician::firstOrCreate([
            'name' => 'John Smithers',
            'image' => 'public/images/technician-4.jpg',
            'contact_number' => '09916734657',
            'status' => 'On hold'
        ]);


        OrthopedicTechnician::firstOrCreate([
            'name' => 'Val Menesez',
            'image' => 'public/images/technician-5.jpg',
            'contact_number' => '09017384567',
            'status' => 'On hold'
        ]);
    }
}
