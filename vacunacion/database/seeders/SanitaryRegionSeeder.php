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
            'name' => 'A',
            'latitude' => '112',
            'longitude' => '223',
            'province' => 'Buenos Aires',
        ]);

        Sanitary_region::create([
            'name' => 'I',
            'latitude' => '112',
            'longitude' => '223',
            'province' => 'Buenos Aires',
        ]);

        Sanitary_region::create([
            'name' => 'J',
            'latitude' => '112',
            'longitude' => '223',
            'province' => 'Buenos Aires',
        ]);

        Sanitary_region::create([
            'name' => 'B',
            'latitude' => '113',
            'longitude' => '224',
            'province' => 'La Pampa',
        ]);

        Sanitary_region::create([
            'name' => 'G',
            'latitude' => '113',
            'longitude' => '224',
            'province' => 'La Pampa',
        ]);

        Sanitary_region::create([
            'name' => 'H',
            'latitude' => '113',
            'longitude' => '224',
            'province' => 'La Pampa',
        ]);

        Sanitary_region::create([
            'name' => 'C',
            'latitude' => '114',
            'longitude' => '225',
            'province' => 'Rio Negro',
        ]);

        Sanitary_region::create([
            'name' => 'D',
            'latitude' => '115',
            'longitude' => '226',
            'province' => 'Santa Cruz',
        ]);

        Sanitary_region::create([
            'name' => 'E',
            'latitude' => '115',
            'longitude' => '226',
            'province' => 'Santa Cruz',
        ]);

        Sanitary_region::create([
            'name' => 'F',
            'latitude' => '115',
            'longitude' => '226',
            'province' => 'Santa Cruz',
        ]);
    }
}
