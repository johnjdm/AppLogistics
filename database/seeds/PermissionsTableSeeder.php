<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;;
use App\Users;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Perfil
      Permission::create([
        'name'            => 'Navegar perfil personal del Usuario',
        'slug'            => 'profile.index',
        'description'     => 'Ver en Detalle el perfil personal',
      ]);

      //Roles
      Permission::create([
        'name'            => 'Navegar Roles',
        'slug'            => 'roles.index',
        'description'     => 'Lista y Navega Todos los Roles del Sistema',
      ]);
      Permission::create([
        'name'            => 'Ver Detalle de Rol',
        'slug'            => 'roles.show',
        'description'     => 'Ver en Detalle Cada Rol del Sistema',
      ]);
      Permission::create([
        'name'            => 'Creación de Roles',
        'slug'            => 'roles.create',
        'description'     => 'Crear en Detalle Cada Rol del Sistema',
      ]);
      Permission::create([
        'name'            => 'Edición de Roles',
        'slug'            => 'roles.edit',
        'description'     => 'Editar Cualquier Dato de un Rol del Sistema',
      ]);
      Permission::create([
        'name'            => 'Eliminar Usuario',
        'slug'            => 'roles.destroy',
        'description'     => 'Elimina Cualquier Rol del Sistema',
      ]);

      //Users
      Permission::create([
        'name'            => 'Navegar Usuarios',
        'slug'            => 'users.index',
        'description'     => 'Lista y Navega Todos los Usuarios del Sistema',
      ]);
      Permission::create([
        'name'            => 'Ver Detalle de Usuario',
        'slug'            => 'users.show',
        'description'     => 'Ver en Detalle Cada Usuario del Sistema',
      ]);
      Permission::create([
        'name'            => 'Edición de Usuarios',
        'slug'            => 'users.edit',
        'description'     => 'Editar Cualquier Dato de un Usuario del Sistema',
      ]);
      Permission::create([
        'name'            => 'Eliminar Usuario',
        'slug'            => 'users.destroy',
        'description'     => 'Elimina Cualquier Usuario del Sistema',
      ]);

      //Perfiles de los Usuarios
      Permission::create([
        'name'            => 'Navegar Perfiles de los Empleados',
        'slug'            => 'profilesEmpl.index',
        'description'     => 'Lista y Navega Todos los Perfiles del Sistema',
      ]);
      Permission::create([
        'name'            => 'Ver Detalle del Perfil Empleado',
        'slug'            => 'profilesEmpl.show',
        'description'     => 'Ver en Detalle Cada Perfil del Sistema',
      ]);
      Permission::create([
        'name'            => 'Creación de Perfil Empleado',
        'slug'            => 'profilesEmpl.create',
        'description'     => 'Crear en Detalle Cada Perfil del Sistema',
      ]);
      Permission::create([
        'name'            => 'Edición de Perfil Empleado',
        'slug'            => 'profilesEmpl.edit',
        'description'     => 'Editar Cualquier Dato de un Perfil del Sistema',
      ]);
      Permission::create([
        'name'            => 'Eliminar Perfil Empleado',
        'slug'            => 'profilesEmpl.destroy',
        'description'     => 'Elimina Cualquier Perfil del Sistema',
      ]);

    }
}
