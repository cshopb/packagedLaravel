<?php

Route::get('demo/test', function () {
    return 'Test';
});

Route::get('demo/hello', function () {
    return Demo::hello();
});

Route::get('demo', 'Focus\Demo\Http\DemoController@index');

Route::get('demo/view', function () {
    return view('focus-demo-views::index');
});