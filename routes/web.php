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

//Route::group(['middleware' => 'cacheable:2'], function() {
  Route::get('/', function () {
      return view('welcome');
  });
  Route::get('/f1', function () {
      return view('f1');
  });
  Route::get('/f2', function () {
      return view('f1');
  });

//});
Route::get('/f4', function () {
    return view('f1');
});

Route::get('/w', function () {
    return view('welcome');
});
