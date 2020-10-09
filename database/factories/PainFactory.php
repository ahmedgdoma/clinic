<?php

namespace Database\Factories;

use App\Models\Pain;
use Illuminate\Database\Eloquent\Factories\Factory;

class PainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pain::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word
        ];
    }
}
