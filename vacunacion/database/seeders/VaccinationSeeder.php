<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vaccination;


class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Vaccination::create([
            'name' => 'Roberto Navarro',
            'dni' => '53060',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'peronismo al tope'
         ]);

         Vaccination::create([
            'name' => 'Javier Fernadez Tierno',
            'dni' => '5201',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'No sabe de politica'
         ]);

         Vaccination::create([
            'name' => 'Segio Andrade',
            'dni' => '53201',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'Gaiyin discriminado'
         ]);

         Vaccination::create([
            'name' => 'Cristina Fernandez de Kirchner',
            'dni' => '5360011',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'La mejor presidenta'
         ]);

         Vaccination::create([
            'name' => 'Mauricio Macri',
            'dni' => '5304',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'Va a la carcel'
         ]);

         Vaccination::create([
            'name' => 'Alberto Fernandez',
            'dni' => '530250',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'Tibio'
         ]);

         Vaccination::create([
            'name' => 'Dieguito',
            'dni' => '52034601',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'No lo conoce nadie'
         ]);

         Vaccination::create([
            'name' => 'Jair Bolsonaro',
            'dni' => '51223601',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'Fora Bolosonaro'
         ]);

         Vaccination::create([
            'name' => 'Patricia Bullrich',
            'dni' => '5323601',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'Borrachera'
         ]);

         Vaccination::create([
            'name' => 'Fabricio',
            'dni' => '53236001',
            'date_of_application' => '07/13/1993',
            'vaccine' => 'SputnikV',
            'number_of_doses' => '2',
            'risk_group' => 'yes', 
            'adverse_effects' => 'Dank memer'
         ]);

    }
}
