<?php

namespace Database\Factories;

use App\Models\OrthopedicTechnician;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrthopedicTechnicianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrthopedicTechnician::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'contact_number' => $this->faker->numerify('09#########')
        ];
    }
}
