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



//siswa
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/{id}','SiswaController1@show');
Route::post('/siswa/store','SiswaController@store');
Route::post('/siswa/update/{id}','SiswaController@update');
Route::post('/siswa/delete/{id}','SiswaController@destroy');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
