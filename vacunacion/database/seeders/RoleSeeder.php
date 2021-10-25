<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'ministro de salud']);
        $role2 = Role::create(['name' => 'superadmin']);
        $role3 = Role::create(['name' => 'responsable de region sanitaria']);
        $role4 = Role::create(['name' => 'operario']);

        Permission::create(['name' => 'vaccines'])->syncRoles($role2);
        Permission::create(['name' => 'sanitary_regions'])->syncRoles($role2);
        Permission::create(['name' => 'vaccinations'])->syncRoles($role2,$role4);
        Permission::create(['name' => 'users'])->syncRoles($role2,$role3);
        Permission::create(['name' => 'vaccine_lots'])->syncRoles($role3);



    }
}
