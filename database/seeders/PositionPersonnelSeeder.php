<?php

namespace Database\Seeders;

use App\Models\PositionPersonnel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionPersonnelSeeder extends Seeder
{
    protected $intitules = [
        'chef','chef major','lieutnant','adjoint en chef','caporal'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<=10;$i++){
            PositionPersonnel::create([
                'intitule'=>$this->intitules[random_int(0,count($this->intitules)-1)],
                'date_debut'=>fake()->date(),
                'date_fin'=>fake()->date()
            ]);
        }
    }
}
