<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Creación del usuario
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        
        // Asignación del rol
        $user->assignRole('administrator');
        /*
        factory(User::class, 2)->create()->each(function($u) 
        {
            if ($u->id == 1) 
            {
              $u->assignRole('administrator');
            } 
            else 
            {
              $u->assignRole('student');
            }
          });
          factory(Crop::class, 1)->create(['user_id'=>1]);*/
    }
}
