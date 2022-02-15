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

Route::group(['namespace'=>'App\Http\Controllers\Dashboard','middleware'=>'auth:admin','prefix'=>'admin'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
});
Route::group(['namespace'=>'App\Http\Controllers\Dashboard','middleware'=>'guest:admin'], function () {
    Route::get('admin/login', 'LoginController@login')->name('admin.login');
    Route::post('admin/login', 'LoginController@postLogin')->name('admin.post.login');
});
