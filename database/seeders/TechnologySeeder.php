<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Technology::insert(
            [
                'name' => 'Soil Amendment',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'SweetPotato Intercropping',
                'created_at' => now(),
                'updated_at' => now()
            ],
        );
    }
}
