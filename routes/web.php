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
})->name('guest');
// Route::post('/', 'ApiController@')

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks', 'TaskController@index')->name('tasks');
Route::post('/tasks', 'TaskController@searchTasks')->name('search');
Route::get('/tasks/{task}', 'TaskController@delete')->name('task.delete');

Route::get('/tasks-update/{type}/{task}', 'TaskController@show')->name('task.update');
Route::post('/tasks-update/{type}/{task}', 'TaskController@update')->name('update.task');

Route::get('/task-request', 'TaskController@googleForm')->name('google');
Route::post('/task-request', 'TaskController@sendGoogleReviews')->name('create-google');

Route::get('/task-request-yelp', 'TaskController@yelpForm')->name('yelp');
Route::post('/task-request-yelp', 'TaskController@sendYelpReviews')->name('create-yelp');
