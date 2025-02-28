<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolSeeder extends Seeder
{

    public function run()
    {
        $roleRoot = Role::create(['name' => config('roles.root'), 'delete_role' => false]);
        $roleAdministrator = Role::create(['name' => config('roles.administrator'), 'delete_role' => false]);

        Permission::create(['name' => 'admin', 'description' => 'Acceso Panel Administrativo'])->syncRoles([$roleRoot, $roleAdministrator]);

        Permission::create(['name' => 'users.show', 'description' => 'Ver listado de Usuarios'])->syncRoles([$roleRoot, $roleAdministrator]);
        Permission::create(['name' => 'users.create', 'description' => 'Crear Usuarios'])->syncRoles([$roleRoot, $roleAdministrator]);
        Permission::create(['name' => 'users.edit', 'description' => 'Editar Usuarios'])->syncRoles([$roleRoot, $roleAdministrator]);
        Permission::create(['name' => 'users.delete', 'description' => 'Eliminar Usuarios'])->syncRoles([$roleRoot, $roleAdministrator]);

        Permission::create(['name' => 'roles.show', 'description' => 'Ver listado de Roles'])->syncRoles([$roleRoot, $roleAdministrator]);
        Permission::create(['name' => 'roles.create', 'description' => 'Crear Roles'])->syncRoles([$roleRoot, $roleAdministrator]);
        Permission::create(['name' => 'roles.edit', 'description' => 'Editar Roles'])->syncRoles([$roleRoot, $roleAdministrator]);
        Permission::create(['name' => 'roles.delete', 'description' => 'Eliminar Roles'])->syncRoles([$roleRoot, $roleAdministrator]);
    }
}
