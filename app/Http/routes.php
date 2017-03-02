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

Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

// Participantes
Route::get('participantes', 'ParticipanteController@index');
Route::get('edit-post/{id}', 'ParticipanteController@edit');
