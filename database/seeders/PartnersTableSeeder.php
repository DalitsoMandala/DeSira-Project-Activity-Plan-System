<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $partners = [
            [
                'name' => 'International Potato Center',
                'acronym' => 'CIP',
                'description' => 'Roots, tubers and bananas for food security and income',
                'website' => 'https://cipotato.org'
            ],
            [
                'name' => 'Alliance of Bioversity International and CIAT',
                'acronym' => 'Alliance Bioversity-CIAT',
                'description' => 'Delivering research-based solutions for sustainable agriculture',
                'website' => 'https://alliancebioversityciat.org'
            ],
            [
                'name' => 'International Maize and Wheat Improvement Center',
                'acronym' => 'CIMMYT',
                'description' => 'Maize and wheat science for improved livelihoods',
                'website' => 'https://www.cimmyt.org'
            ],
            [
                'name' => 'World Agroforestry Centre',
                'acronym' => 'ICRAF',
                'description' => 'Agroforestry for food security and environmental health',
                'website' => 'https://www.worldagroforestry.org'
            ],
            [
                'name' => 'International Food Policy Research Institute',
                'acronym' => 'IFPRI',
                'description' => 'Research for nutrition, agriculture, and rural development',
                'website' => 'https://www.ifpri.org'
            ],
            [
                'name' => 'International Crops Research Institute for the Semi-Arid Tropics',
                'acronym' => 'ICRISAT',
                'description' => 'Science-based agricultural development for the semi-arid tropics',
                'website' => 'https://www.icrisat.org'
            ],
            [
                'name' => 'International Institute of Tropical Agriculture',
                'acronym' => 'IITA',
                'description' => 'Agricultural research for development in the tropics',
                'website' => 'https://www.iita.org'
            ],
            [
                'name' => 'World Food Council',
                'acronym' => 'WFC',
                'description' => 'Global policies to ensure food security',
                'website' => null
            ],
        ];

        Partner::insert($partners);
    }
}
