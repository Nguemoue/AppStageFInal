<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PositionPersonnel>
 */
class PositionPersonnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'intitule'=>$this->faker->titleMale(),
            'date_debut'=>now()->subMonth(random_int(1,10)),
            'date_fin'=>now()->addYear(random_int(2,5))
            
        ];
    }
}
