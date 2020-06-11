<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
        Passport::refreshTokensExpireIn(now()->addMinutes(10));
        Passport::loadKeysFrom('/secret-keys/oauth');

        Gate::define('manage-users', function($user) {
            return $user->hasAnyRoles(['admin', 'analist']);
        });

        Gate::define('edit-users', function($user) {
            return $user->hasRole('admin');
        });

        Gate::define('delete-users', function($user) {
            return $user->hasRole('admin');
        });

        Gate::define('create-edit-content', function($user) {
            return $user->hasRole('admin');
        });
    }
}
