<?php

namespace App\Providers;

use Database\Seeders\CategoriesSeeder;
use Facade\FlareClient\View;
use Illuminate\Support\ServiceProvider;
use App\Models\categories;
use Illuminate\Pagination\Paginator;

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
        //
        view()->share('navigation', categories::all());
        Paginator::useBootstrap();
    }
}
