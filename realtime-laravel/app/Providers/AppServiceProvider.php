<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
        Gate::define('admin', function (User $user) {
            return $user->role === 3;
        });
        Gate::define('manager', function (User $user) {
            return $user->role === 2;
        });
        Gate::define('engginer', function (User $user) {
            return $user->role === 1;
        });
    }
}
