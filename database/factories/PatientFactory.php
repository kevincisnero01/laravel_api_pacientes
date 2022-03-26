<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'names' => $this->faker->name(),
            'last_names' => $this->faker->name(),
            'age' => $this->faker->randomElement([20,25,30,40]),
            'gender' => $this->faker->randomElement(['Femenino','Masculino']),
            'cedula' => random_int(24000000,30000000),
            'blood_type' =>$this->faker->randomElement(['A+','A-','B+','B-','AB+','AB-','O+','O-']),
            'phone' => $this->faker->randomElement([416,412,414]) . rand(1000000,9000000),
            'email' => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->randomElement(['Avenida Test','Sector Test','Calle Test'])
        ];
    }
}
