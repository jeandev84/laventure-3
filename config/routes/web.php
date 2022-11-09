<?php

use Laventure\Foundation\Facade\Routing\Route;


/*
|----------------------------------------------------------------------
|     Registration all web routes
|----------------------------------------------------------------------
*/


Route::get('/', function () {
     return view('welcome');
});


Route::get('/', [\App\Http\Controllers\PageController::class, 'demo']);


Route::group(['prefix' => 'admin', 'module' => 'Admin', 'name' => 'admin.'], function () {
    Route::resource('user', 'UserController');
});

