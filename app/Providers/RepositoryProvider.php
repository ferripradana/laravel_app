<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Contract\CategoryInterface;
use App\Repository\Category;
use App\Repository\Contract\UserInterface;
use App\Repository\User;
use App\Repository\Contract\RoleInterface;
use App\Repository\Role;

class RepositoryProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CategoryInterface::class, Category::class);
        $this->app->bind(UserInterface::class, User::class);
        $this->app->bind(RoleInterface::class, Role::class);
    }
}
