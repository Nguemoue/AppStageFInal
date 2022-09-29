<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PositionPersonnel>
 */
class PositionPersonnelFactory extends Factory
{
    protected $intitules = [
        'chef','chef major','lieutnant','adjoint en chef','caporal'
    ];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'intitule'=>$this->intitules[random_int(0,count($this->intitules)-1)],
            'date_debut'=>now()->subMonth(random_int(1,10)),
            'date_fin'=>now()->addYear(random_int(2,5))
            
        ];
    }
}
