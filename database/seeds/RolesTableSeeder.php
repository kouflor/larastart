<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear Cache
        app()['cache']->forget('spatie.permission.cache');

        // Create Permissions
        Permission::create(['name' => 'update-profile']);
        Permission::create(['name' => 'post-comments']);

        // create roles and assign existing permissions
        $webmaster = Role::create(['name' => 'webmaster']);
        $webmaster->givePermissionTo('update-profile');
        $webmaster->givePermissionTo('post-comments');

        $administrator = Role::create(['name' => 'administrator']);
        $administrator->givePermissionTo('update-profile');
        $administrator->givePermissionTo('post-comments');

        $moderator = Role::create(['name' => 'moderator']);
        $moderator->givePermissionTo('post-comments');

        $user = Role::create(['name' => 'user']);
        $user->givePermissionTo('post-comments');
    }
}
