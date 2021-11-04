<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Report_solicitation;


class reportSolicitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report_solicitation::create([
            'province' => 'Buenos Aires',
            'sanitary_region' => 'region 1',
            'vaccinations_or_vaccines' => 'vaccine'
        ]);

        Report_solicitation::create([
            'province' => 'La Pampa',
            'sanitary_region' => 'region 2',
            'vaccinations_or_vaccines' => 'vaccination'
        ]);

        Report_solicitation::create([
            'province' => 'Buenos Aires',
            'sanitary_region' => 'region 1',
            'vaccinations_or_vaccines' => 'vaccination'
        ]);

        Report_solicitation::create([
            'province' => 'Santa cruz',
            'sanitary_region' => 'region 4',
            'vaccinations_or_vaccines' => 'vaccination',
            'checked' => 'TRUE',
            'validated' => 'TRUE'
        ]);

        Report_solicitation::create([
            'province' => 'Rio Negro',
            'sanitary_region' => 'region 3',
            'vaccinations_or_vaccines' => 'vaccine',
            'checked' => 'TRUE',
            'validated' => 'TRUE'
        ]);
    }
}
