<?php


/**
 * HUB level routes
 */
Route::group(['prefix' => 'hub', 'middleware' => [/*'auth:hub'*/], 'namespace' => 'Hub'], function() {
    Route::get('/', ['uses' => 'Index\IndexController@showList']);
    Route::get('object', ['uses' => 'Index\IndexController@showObject']);
    Route::get('theme-settings', ['uses' => 'Index\IndexController@showThemeSettings']);
    Route::post('theme-settings', ['uses' => 'Index\IndexController@saveThemeSettings']);
});


/**
 * FRONTEND level routes
 */
Route::get('/', function () {
    return redirect('hub');
});
