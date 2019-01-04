<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_adminsys = Role::where('name', 'adminsistema')->first();
        $role_admin = Role::where('name', 'administrador')->first();
        $role_secretaria = Role::where('name', 'secretaria')->first();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@guarderia.com';
        $user->password = bcrypt('guarderia');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'adminsys';
        $user->email = 'adminsys@guarderia.com';
        $user->password = bcrypt('guarderia');
        $user->save();
        $user->roles()->attach($role_adminsys);

        $user = new User();
        $user->name = 'secretaria';
        $user->email = 'secretaria@guarderia.com';
        $user->password = bcrypt('guarderia');
        $user->save();
        $user->roles()->attach($role_secretaria);
    }
}
