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

Route::get('demo/config', function () {
    return config('focus-demo.main.option') .
        config('focus-demo.main.another_option');
});

Route::get('demo/model', function () {
    dd(\Focus\Demo\Models\Item::get());
});