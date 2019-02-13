<?php

namespace Modules\Core\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Modules\Core\Entities\Permission;

class PermissionsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    public function boot()
    {
        Permission::get()->map(function($permission)
        {
            Gate::define($permission->slug, function($user) use ($permission)
            {
                return $user->hasPermissionTo($permission);
            });
        });

        Blade::directive('role', function ($role)
        {
            return "<?php if(auth()->check() && auth()->user()->hasRole({$role})):?>";
        });

        Blade::directive('endrole', function($role)
        {
            return "<?php endif; ?>";
        });
    }

}
