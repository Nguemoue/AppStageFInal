<?php

namespace Database\Factories;

use App\Models\TypeMateriel;
use App\Models\Unite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materiel>
 */
class MaterielFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'etat'=>$this->faker->randomFloat(2)." % ",
            'quantite'=>random_int(1,200),
            'unite_id'=>Unite::query()->get("id")->random(),
            'designation'=>$this->faker->realText(100),
            'type_materiel'=>TypeMateriel::query()->get('id')->random()
        ];
    }
}
