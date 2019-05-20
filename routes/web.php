<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/atividades', 'AtividadeController@index');
Route::get('/atividades/create', 'AtividadeController@create');
Route::post('/atividades', 'AtividadeController@store');
Route::get('/atividades/{id}', 'AtividadeController@show');
Route::get('/atividades/{id}/edit', 'AtividadeController@edit');
Route::put('/atividades/{id}', 'AtividadeController@update');

Route::get('/messages', 'messageController@index');
Route::get('/messages/create', 'messageController@create');
Route::post('/messages', 'messageController@store');
Route::get('/messages/{id}', 'messageController@show');
Route::get('/messages/{id}/edit', 'messageController@edit');
Route::put('/messages/{id}', 'messageController@update');

//php artisan key:generate
//composer dump-autoload
//php artisan migrate --seed