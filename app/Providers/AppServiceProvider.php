<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Service\Category\CategoryService::class, \App\Service\Category\CategoryServiceImpl::class);
        $this->app->bind(\App\Service\User\UserService::class, \App\Service\User\UserServiceImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
