<?php
namespace Focus\Demo\Http;

use Illuminate\Routing\Controller as BaseController;

class DemoController extends BaseController
{
    public function index()
    {
        return \Demo::hello() . ' from controller.';
    }
}