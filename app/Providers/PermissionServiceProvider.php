<?php


namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        try {
            Permission::get()->map(function ($permission) {
                Gate::define($permission->alias, function ($user) use ($permission) {
                   return $user->hasPermission($permission);
                });
            });
        } catch (\Exception $exception) {
            report($exception);
            return false;
        }
    }
}
