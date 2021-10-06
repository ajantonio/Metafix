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
     *
     * @return array
     */
    public function definition()
    {
        $orthopedic_implants = array('Plates', 'Screws');

        return [
            'implant_name' => $orthopedic_implants[array_rand($orthopedic_implants)],
            'serial_num' => $this->faker->bothify('??##??#'),
            'price' => rand(5000, 10000),
            'grades_id' => rand(1, 2)
        ];
    }
}
