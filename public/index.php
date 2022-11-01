<?php

/*
|----------------------------------------------------------------------
|   Laventure
|
|   Author      :   Jean-Claude
|   Email       :   jeanyao@ymail.com
|   Occupation  :   Backend PHP Developer
|   GITLAB      :   https://github.com/jeandev84/laventure
|
|----------------------------------------------------------------------
*/



define('Laventure', microtime(true));



/*
|----------------------------------------------------------------------
|   Autoload dependencies of application
|----------------------------------------------------------------------
*/

require_once realpath(__DIR__.'/../vendor/autoload.php');




/*
|-------------------------------------------------------
|    Get instance of Application
|-------------------------------------------------------
*/

$app = require_once __DIR__.'/../bootstrap/app.php';




/*
|-------------------------------------------------------
|    Get instance of Kernel
|-------------------------------------------------------
*/


$kernel = $app->getHttpKernel();




/*
|-------------------------------------------------------
|    Get Response
|-------------------------------------------------------
*/


$response = $kernel->handle(
    $request = \Laventure\Component\Http\Request\Request::fromGlobals()
);




/*
|-------------------------------------------------------
|    Send all headers to navigator
|-------------------------------------------------------
*/

$response->send();





/*
|-------------------------------------------------------
|    Terminate application
|-------------------------------------------------------
*/

$kernel->terminate($request, $response);