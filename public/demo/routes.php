<?php


use Laventure\Foundation\Facade\Routing\Route;


/*
|----------------------------------------------------------------------
|     Registration all web routes
|----------------------------------------------------------------------
*/


Route::get('/', function (\Laventure\Component\Http\Request\Request $request) {
    return view('welcome.php');
});


Route::get('/home', [\App\Http\Controllers\PageController::class, 'index'])
    ->name('home');

Route::get('/show/{id}', [\App\Http\Controllers\PageController::class, 'show'])
    ->name('show');

Route::get('/contact', [\App\Http\Controllers\PageController::class, 'contact'])
    ->name('contact');

Route::post('/contact', [\App\Http\Controllers\PageController::class, 'send'])
    ->name('send');

/*
Route::get('/', function () {
    return "Welcome";
});


Route::get('/contact', function () {
    return "Contact";
});


Route::post('/contact', function () {
    return "Send contact";
});



Route::get('/demo', function (\Laventure\Component\Http\Request\Request $request) {

    dd($request->getHeaders()); dd($request->getContent());

    return [
        'id'       => 1,
        'name'     => 'jean',
        'email'    => 'jeanyao@ymail.com',
        'password' => password_hash('123', PASSWORD_DEFAULT)
    ];
});



Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])
     ->middleware(['foo', \App\Http\Middlewares\GuestMiddleware::class]);
Route::get('/{id}', [\App\Http\Controllers\PageController::class, 'show']);
Route::get('/contact', [\App\Http\Controllers\PageController::class, 'contact']);
Route::post('/contact', [\App\Http\Controllers\PageController::class, 'contact']);
*/

