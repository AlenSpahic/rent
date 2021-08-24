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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'PageController@welcome')->name('welcome');

Route::post('/home', 'OrderController@store')->name('home.store');
Route::get('/kontakt', 'ContactController@index')->name('contact');
Route::post('/kontakt', 'ContactController@store')->name('kontakt.store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




// Admin

Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('dashboard', function () {
    return view('admin.dashboard');
    });

    Route::resource('user', 'UserController');
    Route::resource('blog', 'BlogController');
    Route::resource('orderCar', 'OrderController');



});