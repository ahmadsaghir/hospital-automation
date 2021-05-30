<?php

use App\Hasta;
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

Route::get('/', 'Controller@home');
Route::get('/hakkimizda', 'Controller@hakkimizda');
Route::get('/iletisim', 'Controller@iletisim');
Route::get('/otomasyon', 'Controller@otomasyon');

/*randevu*/
Route::get('/otomasyon/randevular/create', 'RandevuController@create');
Route::post('/otomasyon/randevular', 'RandevuController@store');
Route::get('/otomasyon/randevular', 'RandevuController@index')->name('randevu.index');
Route::get('/otomasyon/randevular/{randevu}', 'RandevuController@show')->name('randevu.show');
Route::get('/otomasyon/randevular/{randevu}/edit', 'RandevuController@edit');
Route::put('/otomasyon/randevular/{randevu}', 'RandevuController@update');
Route::get('/otomasyon/randevular/{randevu}/delete', 'RandevuController@destroy')->name('randevu.delete');
Route::get('/randevular/search/', 'RandevuController@search')->name('randevu.search');
