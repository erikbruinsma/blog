<?php

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

Route::get('/', function () {
    return view('welcome', ['id' => tenant('id')]);
});
Route::get('/f1', function () {
    return view('f1');
});
