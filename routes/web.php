<?php

use App\Http\Controllers\ClientController;
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

//Auth
Route::get('/admin', function () {
    return view('admin.index');
});
Route::post('/admin-login', 'App\Http\Controllers\AuthController@login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

//Routing Client
Route::get('/', 'App\Http\Controllers\ClientController@home');

//Routing Admin
Route::group(['middleware' => ['cek-login:0']], function () {
    Route::get('admin/dashboard', 'App\Http\Controllers\TransaksiController@resultTransaksi');
    //kategori
    Route::get('admin/transaksi', 'App\Http\Controllers\TransaksiController@read');
    Route::post('tambah-kategori', 'App\Http\Controllers\TransaksiController@create');
    Route::delete('/delete-kategori{id}', 'App\Http\Controllers\TransaksiController@delete')->name('delete-kategori');
});
