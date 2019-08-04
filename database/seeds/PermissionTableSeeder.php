<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.show']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.destroy']);

        //roles
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.show']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.destroy']);
        //equipo
        Permission::create(['name' => 'device.index']);
        Permission::create(['name' => 'device.show']);
        Permission::create(['name' => 'device.create']);
        Permission::create(['name' => 'device.edit']);
        Permission::create(['name' => 'device.destroy']);
        //actividades
        Permission::create(['name' => 'activity.index']);
        Permission::create(['name' => 'activity.show']);
        Permission::create(['name' => 'activity.create']);
        Permission::create(['name' => 'activity.edit']);
        Permission::create(['name' => 'activity.destroy']);
    }
}
