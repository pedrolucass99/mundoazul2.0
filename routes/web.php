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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





Route::middleware(['auth'])->group(function () {

Route::resource('profissional', 'ProfissionalController');

Route::resource('responsavel', 'ResponsavelController');

Route::resource('instituicao', 'InstituicaoController');


Route::post('profissional/{id}' ,'ProfissionalController@update');

Route::post('responsavel/{id}' ,'ResponsavelController@update');

Route::post('instituicao/{id}' ,'InstituicaoController@update');

Route::resource('forum','ForumController');

Route::post('forum/{id}' ,'ForumController@update');

Route::resource('eventos', 'EventoController');

Route::post('eventos/{id}' ,'EventoController@update');

});


