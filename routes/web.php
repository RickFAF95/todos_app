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

Route::name('home')->get('/', 'TodosController@index');

Route::name('todos.create')->get('/todo/create', 'TodosController@create');
Route::name('todos.store')->put('/todo/store', 'TodosController@store');

Route::name('todos.show')->get('/todo/show/{id}', 'TodosController@show');

Route::name('todos.edit')->get('/todo/edit/{id}', 'TodosController@edit');
Route::name('todos.update')->put('/todo/update/{id}', 'TodosController@update');
Route::name('todos.completed')->get('/todo/completed/{id}', 'TodosController@completed');

Route::name('todos.delete')->delete('/todo/delete/{id}', 'TodosController@destroy');