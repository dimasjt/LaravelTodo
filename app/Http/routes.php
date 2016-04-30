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

Route::auth();

// Route::get('/', 'TaskController@index');
Route::get('/', 'ProjectsController@index');

Route::post('/projects', 'ProjectsController@create');
Route::delete('/projects/{project}', 'ProjectsController@destroy');


Route::get('/projects/{project}/tasks', 'TaskController@index');

Route::post('/projects/{project}/tasks', 'TaskController@store');

Route::delete('/task/{task}', 'TaskController@destroy');
