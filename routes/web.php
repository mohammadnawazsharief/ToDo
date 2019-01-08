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

// Route::get('/new', function () {
//     return view('new');
// });

Route::get('/new', [
	'uses' => 'PageController@new'
]);

Route::get('/todos',[
	'uses' =>'ToDosController@index',
	'as' => 'todos'
]);

Route::post('/create/todo','ToDosController@store');

Route::get('/todo/delete/{id}',
	[
		'uses' =>'ToDosController@delete',
		'as' => 'todo.delete'
	]

);
Route::get('/todo/update/{id}',
	[
		'uses' =>'ToDosController@update',
		'as' => 'todo.update'
	]

);

Route::post('/todo/save/{id}',[
	'uses' =>'ToDosController@save',
	'as' =>'todos.save'
]);
Route::get('/todo/finished/{id}',[
	'uses' =>'ToDosController@finished',
	'as' =>'todos.finished'
]);