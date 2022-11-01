<?php

/*
|-------------------------------------------------------------------
|    Create new application
|-------------------------------------------------------------------
*/

$app = new \Laventure\Foundation\Application(__DIR__ . '/../');



/*
|-------------------------------------------------------------------
|    Binds important interfaces of application
|-------------------------------------------------------------------
*/


$app->kernelHTTP(\App\Http\Kernel::class)
    ->kernelConsole(\App\Console\Kernel::class)
    ->exceptionHandler(\App\Exception\ExceptionHandler::class);




/*
|-------------------------------------------------------------------
|    Return instance of application
|-------------------------------------------------------------------
*/

return $app;