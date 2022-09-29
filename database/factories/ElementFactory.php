<?php

namespace Database\Factories;

use App\Models\Unite;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Element>
 */
class ElementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'personnel_id'=>User::query()->whereRaw("id not in (select personnel_id from chefs) ")->get("id")->random(),
            "unite_id"=>Unite::query()->get("id")->random()
        ];
    }
}
