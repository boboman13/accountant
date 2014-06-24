<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('/', 'EntryController');

Route::get('/{id}/edit', 'EntryController@edit');
Route::post('/{id}/save', 'EntryController@update');

Route::get('/{id}/delete', 'EntryController@destroy');
