<?php

namespace Thetodd\Laravel\Updater;

use Illuminate\Support\ServiceProvider;
use Route;

class SelfUpdaterServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            //require __DIR__.'/../../routes.php';
            Route::group(['prefix' => 'self-updater', 'namespace' => 'Thetodd\Laravel\Updater\Controllers'], function () {
                Route::get('check', 'UpdateController@check');
            });
        }

        $this->publishes([
            __DIR__.'/../config/self-updater.php' => config_path('self-updater.php'),
        ]);

        $this->loadViewsFrom(__DIR__.'/views', 'self-updater');
    }
}
