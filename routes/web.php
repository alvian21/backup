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


Route::get("/login", "Frontend\AuthController@getLogin");
Route::post("/login", "Frontend\AuthController@login")->name("login");


Route::group(['middleware' => 'auth:web', 'namespace' => 'Frontend', 'prefix' => 'admin'], function () {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('backup', 'BackupController');
  
    //logout
    Route::post("/logout", "AuthController@logout")->name("logout");
});
