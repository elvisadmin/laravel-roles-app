<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $admin = Role::create(['name' => 'Administrator', 'slug' => 'admin']);
        $editor = Role::create(['name' => 'Editor', 'slug' => 'editor']);

        $editPosts = Permission::create(['name' => 'Edit Posts', 'slug' => 'edit-posts']);
        $deletePosts = Permission::create(['name' => 'Delete Posts', 'slug' => 'delete-posts']);

        $admin->permissions()->attach([$editPosts->id, $deletePosts->id]);
        $editor->permissions()->attach([$editPosts->id]);
    }
}

