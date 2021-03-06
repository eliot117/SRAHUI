<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name' => 'crop_create']);
        Permission::create(['name' => 'crop_edit']);
        Permission::create(['name' => 'crop_show']);
        Permission::create(['name' => 'crop_delete']);

        Permission::create(['name' => 'user_create']);
        Permission::create(['name' => 'user_edit']);
        Permission::create(['name' => 'user_show']);
        Permission::create(['name' => 'user_delete']);
    }
}
