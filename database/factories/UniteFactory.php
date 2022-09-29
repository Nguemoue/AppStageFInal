<?php

namespace Database\Factories;

use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unite>
 */
class UniteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->unique()->company(),
            'contact'=>$this->faker->companySuffix(),
            'code'=>$this->faker->unique()->currencyCode(),
            'longitude'=>$this->faker->longitude(),
            'latitude'=>$this->faker->latitude(),
            'ville_id'=>Ville::query()->get("id")->random()

        ];
    }
}
