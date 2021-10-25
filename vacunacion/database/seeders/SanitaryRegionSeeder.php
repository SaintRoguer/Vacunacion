<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sanitary_region;


class SanitaryRegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sanitary_region::create([
            'name' => 'region 1',
            'latitude' => '112',
            'longitude' => '223',
            'province' => 'Buenos Aires',
        ]);

        Sanitary_region::create([
            'name' => 'region 2',
            'latitude' => '113',
            'longitude' => '224',
            'province' => 'La Pampa',
        ]);

        Sanitary_region::create([
            'name' => 'region 3',
            'latitude' => '114',
            'longitude' => '225',
            'province' => 'Rio Negro',
        ]);

        Sanitary_region::create([
            'name' => 'region 4',
            'latitude' => '115',
            'longitude' => '226',
            'province' => 'Santa Cruz',
        ]);
    }
}
