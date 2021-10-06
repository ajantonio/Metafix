<?php

namespace Database\Factories;

use App\Models\OrthopedicDoctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrthopedicDoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrthopedicDoctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'status' => 'accepted',
            'email' => $this->faker->email,
            'contact_number' => $this->faker->numerify('09#########')
        ];
    }
}
