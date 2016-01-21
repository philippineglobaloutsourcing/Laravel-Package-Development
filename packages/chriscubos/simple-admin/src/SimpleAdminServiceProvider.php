<?php

namespace ChrisCubos\SimpleAdmin;

use Illuminate\Support\ServiceProvider;

class SimpleAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'simpleAdmin');
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/chriscubos/simpleAdmin'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('ChrisCubos\SimpleAdmin\SimpleAdminController');
    }
}
