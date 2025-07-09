<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;  // Perbaiki huruf kapital

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
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->register();

        Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
        });

        Gate::define('isTutor', function($user) {
            return $user->role == 'tutor';
        });
        
        Gate::define('isPelajar', function($user) {
            return $user->role == 'pelajar';
        });
    }
}