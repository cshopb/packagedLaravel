<?php
namespace Focus\Demo;

use Illuminate\Support\Facades\Facade;

class DemoFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'focus-demo';
    }
}