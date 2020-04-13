<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider
| with the tenancy and web middleware groups. Good luck!
|
*/
Route::group(['middleware' => 'cacheable:1'], function() {
  Route::get('/', function () {
      return view('welcome', ['id' => tenant('id')]);
  });
});
