<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vaccine;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaccine::create([
           'name' => 'SputnikV',
           'laboratory' => 'Gamaleya',
           'date_of_caducity' => '07/13/1993',
           'number_of_doses' => '2',
           'days_between_doses' => '15', 
        ]);

        Vaccine::create([
            'name' => 'Sinopharm',
            'laboratory' => 'Sinopharm',
            'date_of_caducity' => '07/13/1993',
            'number_of_doses' => '2',
            'days_between_doses' => '15', 
         ]);

         Vaccine::create([
            'name' => 'Moderna',
            'laboratory' => 'Moderna',
            'date_of_caducity' => '07/13/1993',
            'number_of_doses' => '2',
            'days_between_doses' => '30', 
         ]);

    }
}
