<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\User;
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
    public function boot()
    {
        Gate::define('admin', function(User $user){
            return $user->is_admin;
        });

        Gate::define('customer', function ($user) {
            return $user->transactions()->where('status', 'success')->exists();
        });
    }
}
