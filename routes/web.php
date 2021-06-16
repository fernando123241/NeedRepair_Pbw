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
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/painting', function () {
    return view('painting');
});
Route::get('/popup', function () {
    return view('popup');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/popuppayment', function () {
    return view('popuppayment');
});
// Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
// Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

// Route::group(['middleware' => ['auth']], function(){
//     Route::group(['middleware' => ['cek_login:admin']], function(){
//         Route::get('admin', 'App\Http\Controllers\AdminController@index')->name('admin');
//     });
// });