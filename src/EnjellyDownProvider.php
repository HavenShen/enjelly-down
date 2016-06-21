<?php

namespace HavenShen\EnjellyDown;

use HavenShen\EnjellyDown\Librarys\Parser;
use HavenShen\EnjellyDown\Services\EnjellyDownServices;
use Illuminate\Support\ServiceProvider;

class EnjellyDownProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->publishes([
//            __DIR__ . '/config/config.php' => base_path('config/yunpian.php'),
//        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('EnjellyDown', function($app){
            return new EnjellyDownServices(new Parser);
        });
    }
}
