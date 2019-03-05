<?php


/**
 * HUB level routes
 */
Route::group(['prefix' => 'hub', 'middleware' => [/*'auth:hub'*/], 'namespace' => 'Hub'], function() {

    Route::get('/', ['uses' => 'Index\IndexController@showDashboard']);
    Route::get('object', ['uses' => 'Index\IndexController@showObject']);

    Route::get('property/listings/list', ['uses' => 'Index\IndexController@listingsList']);
    Route::get('property/listings/view', ['uses' => 'Index\IndexController@listingsView']);
    Route::get('property/listings/edit', ['uses' => 'Index\IndexController@listingsEdit']);

    Route::get('theme-settings', ['uses' => 'Index\IndexController@showThemeSettings']);
    Route::post('theme-settings', ['uses' => 'Index\IndexController@saveThemeSettings']);

});


/**
 * FRONTEND level routes
 */
Route::get('/', function () {
    return redirect('hub');
});
