<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /* Config for user restriction and role */
        Gate::define('admin', function ($user) {
            return $user->role == 'admin';
        });

        Gate::define('visitor', function ($user) {
            return $user->role != 'visitor';
        });
    }
}