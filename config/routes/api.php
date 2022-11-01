<?php


use Laventure\Foundation\Facade\Routing\Route;

Route::get('/posts', [\App\Http\Controllers\Api\V1\PostController::class, 'index']);