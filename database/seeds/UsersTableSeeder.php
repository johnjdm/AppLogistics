<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //factory(App\User::class, 5)->create();

      Role::create([
        'name'      => 'Administrador',
        'slug' 	    => 'administrador',
        'special' 	=> 'all-access',
      ]);

      Role::create([
        'name'          => 'Gerente',
        'slug' 	        => 'gerente',
        'description' 	=> 'Gerente Comercial, Subgerente y Regional',
      ]);

      Role::create([
        'name'          => 'Ejecutivo',
        'slug' 	        => 'ejecutivo',
        'description' 	=> 'Ejecutivo Comercial',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '1',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '7',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '8',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '9',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '10',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '11',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '12',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '13',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '14',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '15',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '16',
        'role_id' => '2',
      ]);

      DB::table('permission_role')->insert([
        'permission_id' => '1',
        'role_id' => '3',
      ]);

      DB::table('users')->insert([
        'name' => 'John Jerry Daza Montero',
        'email' => 'johnjdm.ings@live.com',
        'password' 	=> bcrypt('123456'),
      ]);

      DB::table('role_user')->insert([
        'role_id' => '1',
        'user_id' => '1',
      ]);
    }
}
