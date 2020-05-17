<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Role::create(['name' => 'Helpdesk Administrator']);
        Role::create(['name' => 'Helpdesk Coordinator']);
        Role::create(['name' => 'Helpdesk Specialist']);
        Role::create(['name' => 'Helpdesk Team Lead']);
        Role::create(['name' => 'Helpdesk Supervisor']);
        Role::create(['name' => 'Helpdesk Senior Support']);
        Role::create(['name' => 'Helpdesk Support']);
        Role::create(['name' => 'Helpdesk Senior Analyst']);
        Role::create(['name' => 'Helpdesk Analyst']);
        Role::create(['name' => 'Guest']);
    }
}
