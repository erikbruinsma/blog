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

Route::group(['middleware' => 'cacheable:1'], function() {
  Route::get('/', function () {
      return view('welcome', ['id' => 'reboot']);
  });
  Route::get('/f1', function () {
      return view('f1');
  });



});
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
