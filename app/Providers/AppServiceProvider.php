<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Define Gates
        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });

        Gate::define('isTutor', function($user) {
            return $user->role == 'tutor';
        });

        Gate::define('isPelajar', function($user) {
            return $user->role == 'pelajar';
        });

        // Define Blade Directives
        Blade::directive('role', function ($role) {
            return "<?php if(auth()->check() && auth()->user()->role === {$role}): ?>";
        });

        Blade::directive('endrole', function () {
            return "<?php endif; ?>";
        });

        Blade::directive('hasrole', function ($roles) {
            return "<?php if(auth()->check() && in_array(auth()->user()->role, [{$roles}])): ?>";
        });

        Blade::directive('endhasrole', function () {
            return "<?php endif; ?>";
        });
    }
}