<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'superadmin',
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'province' => 'Buenos Aires',
            'city' => 'Bahia Blanca',
            'password' => bcrypt('superadmin'),
            'dni' => 0
        ])->assignRole('superadmin');

        User::create([
            'username' => 'operario',
            'name' => 'operario',
            'email' => 'operario@gmail.com',
            'province' => 'Buenos Aires',
            'city' => 'Bahia Blanca',
            'password' => bcrypt('operario'),
            'dni' => 1
        ])->assignRole('operario');
    }
}
