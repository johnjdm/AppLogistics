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
        'name'      => 'Admin',
        'slug' 	    => 'admin',
        'special' 	=> 'all-access',
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
