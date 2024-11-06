<?php

namespace App\Providers;

use App\Models\User;
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
        Gate::define('see-users', function (User $user) {
            return $user->is_admin;
        });

        Gate::define('can-edit-user', function (User $user, $id) {
            return $user->isNot(User::findOrFail($id));
        });
    }
}
