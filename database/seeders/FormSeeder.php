<?php

namespace Database\Seeders;


use App\Models\Form;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Form::create([
            'name' => 'intercropping form'
        ]);

        Form::create([
            'name' => 'soil amendment form'
        ]);
    }
}
