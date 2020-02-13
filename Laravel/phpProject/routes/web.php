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

Route::get('/blog', function() {
    return view('blog', [
    'posts' => App\Post::take(8)->latest()->get()
    ]);
});

//<editor-fold desc="Blog-routes">
Route::get('/blog', 'PostsController@index');
Route::post('/blog', 'PostsController@store');
Route::get('/blog/create', 'PostsController@create');
Route::get('/blog/{post}', 'PostsController@show');
Route::get('/blog/{post}/edit', 'PostsController@edit');
Route::delete('/blog/{post}', 'PostsController@delete');
Route::put('/blog/{post}', 'PostsController@update');
//</editor-fold>

//<editor-fold desc="Dashboard-routes">
Route::get('/dashboard', 'GradesController@index');
Route::post('/dashboard', 'GradesController@store');
Route::get('/dashboard/create', 'GradesController@create');
Route::get('/dashboard/{detail}', 'DetailsController@show');
Route::get('/dashboard/{grade}/edit', 'DetailsController@edit');
Route::delete('/dashboard/{grade}', 'GradesController@delete');
Route::put('/dashboard/{grade}', 'GradesController@update');
//</editor-fold>
