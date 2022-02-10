<?php

namespace App\Providers;
use Log;


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
        if(env('APP_ENV') === 'production') {
            if(env('APP_PROTOCOL') === 'HTTPS') {
                $this->app['request']->server->set('HTTPS', true);
            }
        }
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
