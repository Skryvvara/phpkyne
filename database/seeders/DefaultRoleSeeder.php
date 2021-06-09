<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DefaultRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles

        $role_admin = Role::create([
            'alias' => 'Admin',
            'short_alias' => 'DKYNE',
            'description' => 'Default role for administrators.',
        ]);

        $role_player = Role::create([
            'alias' => 'Player',
            'short_alias' => 'PLAYR',
            'description' => 'Access to the game.',
        ]);

        $role_gamemaster = Role::create([
            'alias' => 'GameMaster',
            'short_alias' => 'GMSTR',
            'description' => 'Gamemaster role, advanced game access.',
        ]);

        // Permissions
        $perm_view_game = Permission::create([
            'alias' => 'view_game',
            'description' => 'Grants access to the game itself.'
        ]);

        $perm_edit_game = Permission::create([
            'alias' => 'edit_game',
            'description' => 'Edit, approve or delete questions.'
        ]);

        // Connect

        $role_player->permissions()->attach([$perm_view_game->id]);

        $role_gamemaster->permissions()->attach([$perm_view_game->id, $perm_edit_game->id]);
    }
}
