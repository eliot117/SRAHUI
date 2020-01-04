<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $role = Role::create(['name' => 'administrator']);
        $role->givePermissionTo('crop_create','crop_edit', 'crop_show', 'crop_delete');
        $role->givePermissionTo('user_create','user_edit', 'user_show', 'user_delete');
 
        $role = Role::create(['name' => 'student']);
        $role->givePermissionTo('crop_show');
        $role->givePermissionTo('user_show','user_edit');
    }
}
