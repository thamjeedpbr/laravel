<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/migrate', function () {
    \Artisan::call('migrate');
    dd('migrated!');
});

Route::get('/seed-init', function () {
    \Artisan::call('db:seed');
    dd('seeded!');
});
Route::get('/optimize', function () {
    \Artisan::call('optimize');
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');

    dd('optimizeed!');
});
Route::get('/clear', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');
    \Artisan::call('config:clear');

    dd('cleared');
});
// Route::get('/', function () {
//     return redirect()->route('dashboard');
// });
Route::get('/', function () {
    return view('welcome');
});
//....LOGIN SECTION.............................................................
Route::prefix('/login')->namespace('App\Http\Controllers')->group(function () {
    Route::post('/register', 'HomeController@register')->name('register');
    Route::get('/', 'LoginController@login')->name('login');
    Route::post('/', 'LoginController@login_submit')->name('login.submit');
});
Route::namespace ('App\Http\Controllers')->middleware('admin')->group(function () {
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::get('/change-password', 'LoginController@change_password_view')->name('change_password_view');
    Route::post('/change-password', 'LoginController@update_password')->name('update_password');
});
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
