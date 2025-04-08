<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ActivityLocation;
use App\Models\ActivityLocationType;
use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $activityLocationTypes = ['On-Farm Experiments', 'On-Station Experiments'];
        $tech = Technology::insert([
            [
                'name' => 'Soil Amendment',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'SweetPotato Intercropping',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
        foreach ($activityLocationTypes as $type) {
            $activity =  ActivityLocation::create([
                'name' => $type
            ]);

            if ($type == 'On-Farm Experiments') {
                $activity->sites()->createMany([
                    ['name' => 'Thuchira'],
                    ['name' => 'Boma'],
                    ['name' => 'Kamwendo'],
                    ['name' => 'Chipoka'],
                    ['name' => 'Chinguluwe'],

                ]);
                $technology1 = Technology::where('name', 'SweetPotato Intercropping')->first();
                $technology2 = Technology::where('name', 'Soil Amendment')->first();
                $activity->technologies()->attach($technology1);
                $activity->technologies()->attach($technology2);;
            } elseif ($type == 'On-Station Experiments') {
                $activity->sites()->createMany([

                    ['name' => 'Chitedze'],
                    ['name' => 'Makoka'],
                    ['name' => 'Chitala'],
                    ['name' => 'Lisasadzi'],
                    ['name' => 'Baka'],

                ]);

                $technology1 = Technology::where('name', 'SweetPotato Intercropping')->first();
                $technology2 = Technology::where('name', 'Soil Amendment')->first();
                $activity->technologies()->attach($technology1);
                $activity->technologies()->attach($technology2);
            }
        }
    }
}
