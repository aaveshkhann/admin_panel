<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\pagination\paginator;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('hash', function () {
            return new Add_User;
        });
    }

    public function provides()
    {
        return ['hash'];
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        paginator::useBootstrap();
    }
}
