<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrthopedicImplant;
use Illuminate\Support\Facades\Storage;

class OrthopedicImplantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrthopedicImplant::firstOrCreate([
            'name' => 'Cortical Screws',
            'image' => Storage::url('images/cortical-screws.jpg'),
            'description' => 'It has threads that are very fine along their shaft, and are designed for anchoring a cortical bone.
            These types of screws have smaller pitch compared to cancellous screws. Therefore, there are a lot more threads on a 
            cortical orthopedic screw than the cancellous screw.',
            'screw_types_id' => 1,
            'grades_id' => null,
            'plate_types_id' => null,
            'price' => 1200,
            'diameter' => null,
            'length' => '3.5mm',
        ]);

        OrthopedicImplant::firstOrCreate([
            'name' => 'Cancellous Screws',
            'image' => Storage::url('images/cancellous-screws.jpg'),
            'description' => 'It has coarser threads that are smooth, with unthreaded portion that allows it to act just as a lag screw. 
            A cancellous screw is longer than a cortical screw.',
            'screw_types_id' => 2,
            'plate_types_id' => null,
            'grades_id' => null,
            'price' => 1050,
            'diameter' => null,
            'length' => '6.5mm',
        ]);

        OrthopedicImplant::firstOrCreate([
            'name' => 'Cannulated Screws',
            'image' => Storage::url('images/cannulated-screws.png'),
            'description' => 'Cannulated screws are commonly used for having hollow shaft. It is to be noted that these orthopedic 
            screws have a lot more advantages over other screws.',
            'screw_types_id' => 3,
            'plate_types_id' => null,
            'grades_id' => null,
            'price' => 850,
            'diameter' => null,
            'length' => '6.5mm',
        ]);

        OrthopedicImplant::firstOrCreate([
            'name' => 'T Buttress Plates',
            'image' => Storage::url('images/t-buttress-plates.jpg'),
            'description' => 'Used to keep together fractures at the ends of long bones at the knee and ankle, where the fracture site is subjected to significant 
            compressive and distorting pressures. These plates are sculpted to move with the body, although some are L- or T-shaped.',
            'screw_types_id' => null,
            'plate_types_id' => 1,
            'grades_id' => null,
            'price' => 8750,
            'diameter' => '4.5mm',
            'length' => null,
        ]);

        OrthopedicImplant::firstOrCreate([
            'name' => 'Neutralization Plates',
            'image' => Storage::url('images/neutralization-plates.jpg'),
            'description' => 'Works to bridge the cracked region, balancing the weight so that screws or other devices can fasten and stabilize the area.',
            'screw_types_id' => null,
            'plate_types_id' => 2,
            'grades_id' => null,
            'price' => 6500,
            'diameter' => '4.5mm',
            'length' => null,
        ]);

        OrthopedicImplant::firstOrCreate([
            'name' => 'Bridging Plates',
            'image' => Storage::url('images/bridging-plates.jpg'),
            'description' => 'Are used to stabilize the area while providing length and alignment. Additionally, bridging plates promote secondary 
            bone healing because they preserve the blood supply to the fracture fragments by not disrupting the damaged area.',
            'screw_types_id' => null,
            'plate_types_id' => 3,
            'grades_id' => null,
            'price' => 9650,
            'diameter' => '5.0mm',
            'length' => null,
        ]);
    }
}
