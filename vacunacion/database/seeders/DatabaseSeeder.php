<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VaccineSeeder::class);
        $this->call(SanitaryRegionSeeder::class);
        $this->call(reportSolicitationSeeder::class);
        $this->call(VaccinationSeeder::class);
        $this->call(Vaccine_lotSeeder::class);
    }
}
