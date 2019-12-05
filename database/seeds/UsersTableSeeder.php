<?php

use App\Role;
use App\User;
use App\Permission;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);


        $role = Role::create([
            'name' => 'Admin',
        ]);


        $permissions = Permission::pluck('id', 'id')->all();

        $role->permissions()->sync($permissions);

        $user->roles()->sync([$role->id]);
    }
}
