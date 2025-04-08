<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ActivityLocation;
use App\Models\ActivityLocationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActivityLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ActivityLocation::create([
            'name' => 'On Farm Experiments',
        ]);

        ActivityLocation::create([
            'name' => 'On Station Experiments',
        ]);
    }
}