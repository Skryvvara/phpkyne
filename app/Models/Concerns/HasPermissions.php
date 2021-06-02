<?php


namespace App\Models\Concerns;

use App\Models\Role;
use App\Models\Permission;

trait HasPermissions
{
    public function hasRole(... $roles) {
        foreach ($roles as $role) {
            if ($this->roles->contains('alias', $role)) {
                return true;
            }
        }
        return false;
    }

    public function hasPermission($permission) {
        foreach ($this->roles as $role) {
            if ($role->permissions->contains('alias', $permission) || $this->roles->contains('alias', 'Admin')) {
                return true;
            }
        }
        return false;
    }
}
