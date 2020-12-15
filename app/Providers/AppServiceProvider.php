<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\MovieServiceInterface;
use App\Interfaces\UserServiceInterface;
use App\Services\MovieService;
use App\Services\UserService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MovieServiceInterface::class, function() {
            return new MovieService();
        });
        $this->app->bind(UserServiceInterface::class, function() {
            return new UserService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
