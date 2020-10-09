<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => Hash::make('123456'), // password
            'remember_token' => Str::random(10),
            'role' =>'admin'
        ];
    }

    public function doctor()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'doctor',
            ];
        });
    }

    public function patient()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'patient',
            ];
        });
    }
}
