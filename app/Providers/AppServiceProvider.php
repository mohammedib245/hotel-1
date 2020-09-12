<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* register the notifications class that don't depend on other classes*/

        /* We don't need to register a binding here, laravel can do it automatically! Just need to inject it in constructor */

        // $this->app->bind('App\Libraries\Notifications', function ($app) {

        //     return new \App\Libraries\Notifications();
        // });

        // $this->app->bind('App\Libraries\NotificationsInterface', function ($app) {

        //     return new \App\Libraries\Notifications();
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    /* register a class that depends on other classes*/
    public function boot()
    {
        //
    }
}
