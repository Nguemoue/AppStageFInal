<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TypeMateriel>
 */
class TypeMaterielFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $randomArray = ["pistolet","fusil","couteau","vehicule","gilets","armures"];
        $size = count($randomArray);
        return [
            'nom'=>$randomArray[random_int(0,--$size)],
            'details'=>$this->faker->realText
        ];
    }
}
