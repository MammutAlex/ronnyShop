<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('isActiveRoute', function (string $route, string $output = "active", string $falseOutput = "") {
            return (Route::currentRouteName() == $route) ? $output : $falseOutput;
        });
        View::share('areActiveRoutes', function (Array $routes, string $output = "active", string $falseOutput = "") {
            foreach ($routes as $route) {
                if (Route::currentRouteName() == $route) {
                    return $output;
                }
            }
            return $falseOutput;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
