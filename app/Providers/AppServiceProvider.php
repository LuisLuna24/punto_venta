<?php

namespace App\Providers;

use App\Models\User;
use App\View\Composers\HeaderComposer;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
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
        Gate::define('admin-options', function (User $user, $role) {
            if ($user->hasRole($role)) {
                return true;
            }
        });

        View::composer('components.header', HeaderComposer::class);
    }
}
