<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@show');

Route::get('/general-view', 'HomeController@show');

Route::get('/financial-analysis', 'HomeController@financialAnalysis');

Route::get('/home', 'HomeController@show');

Route::get('/roa', 'HomeController@roa');

Route::get('/setup', 'HomeController@setup');

Route::get('/excel', 'HomeController@excel');

Route::post('/excel/import', 'HomeController@importDataStore');
