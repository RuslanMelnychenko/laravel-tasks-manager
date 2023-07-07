<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'TaskController@index'); // By default, home page is Tasks List

    // Auth Controllers
    Route::get('/register', 'RegisterController@show')->name('register');
    Route::post('/register', 'RegisterController@action')->name('register.action');
    Route::get('/login', 'LoginController@show')->name('login');
    Route::post('/login', 'LoginController@action')->name('login.action');
    Route::get('/logout', 'LogoutController@action')->name('logout');

    // Tasks
    Route::resource('tasks', 'TaskController')->missing(function () {
        return redirect()->route('tasks.index');
    });
});
