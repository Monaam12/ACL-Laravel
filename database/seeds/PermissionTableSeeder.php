<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{

    public function run()
    {
        //
        $permissions = [
            'list-users',
            'edit-users',
            'delete-users',
            'list-role',
            'create-role',
            'edit-role',
            'delete-role',
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
