<?php

use App\Http\Controllers\MindController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register the API routes for your application as
| the routes are automatically authenticated using the API guard and
| loaded automatically by this application's RouteServiceProvider.
|
*/

Route::group([
    'middleware' => 'auth:api'
], function () {
    //
});


Route::post('appCreated', 'MindController@mindAppCreated');
Route::post('appUpdated', 'MindController@mindAppUpdated');
Route::post('appObjectsUpdated', 'MindController@mindAppObjectsUpdated');

Route::get('test', 'MindController@test');