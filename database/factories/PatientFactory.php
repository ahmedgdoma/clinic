<?php

namespace Database\Factories;

use App\Models\Pain;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $user = User::factory()->patient();
        return [
            'user_id' => $user,
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'mobile' => $this->faker->phoneNumber,
            'birth_date' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'occupation' => $this->faker->jobTitle,
            'pain_id' => Pain::factory(),
            'country' => $this->faker->country
        ];
    }
}
