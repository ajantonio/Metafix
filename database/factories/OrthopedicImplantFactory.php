<?php

namespace Database\Factories;

use App\Models\OrthopedicImplant;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrthopedicImplantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrthopedicImplant::class;

    /**
     * Define the model's default state.
     *         $orthopedic_implants = array('Plates', 'Screws');
     * 'implant_name' => $orthopedic_implants[array_rand($orthopedic_implants)],
     * 
     *         
     * @return array
     */
    public function definition()
    {

        return [
            'screw_types_id' => rand(1, 3),
            'screw_grades_id' => rand(1, 2),
            'screw_price' => rand(850, 1200),
            'plate_types_id' => rand(1, 3),
            'plate_grades_id' => rand(1, 2),
            'plate_price' => rand(5000, 10000),
            'diameter' => $this->faker->bothify('#mm'),
            'length' => $this->faker->bothify('#mm'),
        ];
    }
}
