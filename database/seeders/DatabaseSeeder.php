<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\ChefFactory;
use Database\Factories\ElementFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ElementFactory::times(10)->create();
        ChefFactory::times(3)->create();
        // \App\Models\Unite::factory(20)->create();
        // \App\Models\PositionPersonnel::factory(10)->create();
        // \App\Models\User::factory(60)->create();
        // \App\Models\Authenticate::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
