<?php

Route::get('demo/test', function () {
    return 'Test';
});

Route::get('demo/hello', function () {
    return Demo::hello();
});

Route::get('demo', 'Focus\Demo\Http\DemoController@index');
