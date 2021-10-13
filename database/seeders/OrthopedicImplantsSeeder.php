<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrthopedicImplant;

class OrthopedicImplantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrthopedicImplant::create([
            'screw_types_id' => 1,
            'screw_grades_id' => 1,
            'plate_types_id' => null,
            'plate_grades_id' => null,
            'description' => 'It has threads that are very fine along their shaft, and are designed for anchoring a cortical bone.
            These types of screws have smaller pitch compared to cancellous screws. Therefore, there are a lot more threads on a 
            cortical orthopedic screw than the cancellous screw.',
            'price' => 1200,
            'diameter' => null,
            'length' => '3.5mm',
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => 2,
            'screw_grades_id' => 2,
            'plate_types_id' => null,
            'plate_grades_id' => null,
            'description' => 'It has coarser threads that are smooth, with unthreaded portion that allows it to act just as a lag screw. 
            A cancellous screw is longer than a cortical screw.',
            'price' => 1050,
            'diameter' => null,
            'length' => '6.5mm',
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => 3,
            'screw_grades_id' => 2,
            'plate_types_id' => null,
            'plate_grades_id' => null,
            'description' => 'Cannulated screws are commonly used for having hollow shaft. It is to be noted that these orthopedic 
            screws have a lot more advantages over other screws.',
            'price' => 850,
            'diameter' => null,
            'length' => '6.5mm',
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => null,
            'screw_grades_id' => null,
            'plate_types_id' => 1,
            'plate_grades_id' => 1,
            'description' => 'Used to keep together fractures at the ends of long bones at the knee and ankle, where the fracture site is subjected to significant 
            compressive and distorting pressures. These plates are sculpted to move with the body, although some are L- or T-shaped.',
            'price' => 8750,
            'diameter' => '3.0mm',
            'length' => null,
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => null,
            'screw_grades_id' => null,
            'plate_types_id' => 2,
            'plate_grades_id' => 2,
            'description' => 'Works to bridge the cracked region, balancing the weight so that screws or other devices can fasten and stabilize the area.',
            'price' => 6500,
            'diameter' => '3.0mm',
            'length' => null,
        ]);

        OrthopedicImplant::create([
            'screw_types_id' => null,
            'screw_grades_id' => null,
            'plate_types_id' => 3,
            'plate_grades_id' => 1,
            'description' => 'Are used to stabilize the area while providing length and alignment. Additionally, bridging plates promote secondary 
            bone healing because they preserve the blood supply to the fracture fragments by not disrupting the damaged area.',
            'price' => 9650,
            'diameter' => '3.0mm',
            'length' => null,
        ]);

    }
}
