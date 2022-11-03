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



