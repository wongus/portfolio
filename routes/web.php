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
    return view('home');
});

//<editor-fold desc="Blog-routes">
Route::resource('/blog', 'PostsController');
//</editor-fold>

//<editor-fold desc="Dashboard-routes">
Route::get('/dashboard/{grade}/edit', 'GradesController@edit');
Route::put('/dashboard/{grade}', 'GradesController@update');
Route::put('/dashboard/{detail}', 'GradesController@update');
Route::delete('/dashboard/{grade}', 'GradesController@delete');
Route::resource('/dashboard', 'GradesController');

Route::get('/dashboard/course/{detail}', 'DetailsController@show');
Route::get('/dashboard/{detail}/create', 'DetailsController@create');
Route::post('/dashboard/{id}', 'DetailsController@store');
Route::get('/dashboard/course/{detail}/edit', 'DetailsController@edit');
Route::delete('/dashboard/course/{detail}', 'DetailsController@delete');
//</editor-fold>

//<editor-fold desc="login authentication">
Auth::routes(['register' => false]);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/complete-registration', 'Auth\RegisterController@completeRegistration');
Route::post('/2fa', function () {
    return redirect(URL()->previous());
})->name('2fa')->middleware('2fa');
//</editor-fold>

