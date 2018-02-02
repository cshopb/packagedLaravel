<?php
namespace Focus\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require __DIR__ . '/Http/routes.php';

        $this->loadViewsFrom(__DIR__ . '/views', 'focus-demo-views');

        $this->publishes([
            __DIR__ . '/config' => config_path('focus-demo'),
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/main.php', 'focus-demo-main'
        );

        $this->app->bind('focus-demo', function() {
            return new Demo;
        });
    }
}