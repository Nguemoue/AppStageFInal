<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Unite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chef>
 */
class ChefFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'personnel_id'=>User::query()->whereRaw("id not in (select personnel_id from elements) ")->get("id")->random(),
            "unite_id"=>Unite::query()->get("id")->random()
        ];
    }
}
