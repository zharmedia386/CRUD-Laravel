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

Route::get('/', 'App\Http\Controllers\BukuController@index')->name('buku.index');
Route::get('/create', 'App\Http\Controllers\BukuController@create')->name('buku.create');
Route::post('/store', 'App\Http\Controllers\BukuController@store')->name('buku.store');
Route::post('/buku/delete/{id}', 'App\Http\Controllers\BukuController@destroy')->name('buku.destroy');
Route::get('/edit/{id}', 'App\Http\Controllers\BukuController@edit')->name('buku.edit');
Route::post('/update/{id}', 'App\Http\Controllers\BukuController@update')->name('buku.update');