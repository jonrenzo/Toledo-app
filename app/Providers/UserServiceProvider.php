<?php

namespace App\Providers;

use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserService::class, function ($app) {
            $users = [
                [
                    'name' => 'John Doe',
                    'email' => 'john@doe.com',
                    'gender' => 'male',
                ],
                [
                    'name' => 'Jane Doe',
                    'email' => 'jane@doe.com',
                    'gender' => 'female',
                ]
            ];
            return new UserService($users);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
