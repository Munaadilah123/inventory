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

Route::get('/', 'Auth\LoginController@showLoginForm');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard','DashboardController@index');

Route::get('/inventaris','InventarisController@index');
Route::get('/createinventaris', 'InventarisController@create');
Route::post('/createinventaris', 'InventarisController@store');

Route::get('/peminjaman','PeminjamanController@index');
Route::get('/createpeminajaman', 'PeminjamanController@create');
Route::post('/createpeminjaman', 'PeminjamanController@store');

Route::get('/pengembalian','PengembalianController@index');
Route::get('/user','UserController@index');
Route::get('/laporan','LaporanController@index');