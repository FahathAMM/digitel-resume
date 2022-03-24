<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
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
        // Permission::truncate();
        // Role::truncate();

        $permissions = [
            'read',
            'write',
            'read_write',
            'delete',
            'both',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $roles = [
            'user',
            'admin',
            'developer',

        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
