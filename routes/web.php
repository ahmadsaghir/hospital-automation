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

