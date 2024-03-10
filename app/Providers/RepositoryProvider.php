<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Contract\CategoryInterface;
use App\Repository\Category;

class RepositoryProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CategoryInterface::class, Category::class);
    }
}
