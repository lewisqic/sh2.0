<?php


/**
 * HUB level routes
 */
Route::group(['prefix' => 'hub', 'middleware' => [/*'auth:hub'*/], 'namespace' => 'Hub'], function() {
    Route::get('/', ['uses' => 'Index\IndexController@showList']);
    Route::get('object', ['uses' => 'Index\IndexController@showObject']);
});


/**
 * FRONTEND level routes
 */
Route::get('/', function () {
    return redirect('hub');
});
