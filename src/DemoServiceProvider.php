<?php
namespace Focus\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require __DIR__ . '/Http/routes.php';
    }

    public function register()
    {
        $this->app->bind('focus-demo', function() {
            return new Demo;
        });
    }
}