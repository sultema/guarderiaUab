<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = New Role();
        $role->name = "administrador";
        $role->descritpion = "Administrador";
        $role->save();

        $role = New Role();
        $role->name = "adminsistema";
        $role->descritpion = "Administrador del Sistema";
        $role->save();

        $role = New Role();
        $role->name = "educadora";
        $role->descritpion = "Educadora";
        $role->save();

        $role = New Role();
        $role->name = "sicologo";
        $role->descritpion = "Sicologo";
        $role->save();

        $role = New Role();
        $role->name = "nutricionista";
        $role->descritpion = "Nutricionista";
        $role->save();

        $role = New Role();
        $role->name = "medico";
        $role->descritpion = "Medico";
        $role->save();

        $role = New Role();
        $role->name = "directora";
        $role->descritpion = "Directora";
        $role->save();

        $role = New Role();
        $role->name = "secretaria";
        $role->descritpion = "Secretaria";
        $role->save();

        $role = New Role();
        $role->name = "anonimo";
        $role->descritpion = "Anonimo";
        $role->save();
    }
}
