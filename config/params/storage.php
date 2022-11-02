<?php

return [

    /*
     |------------------------------------------------------------------
     |   Define your cache directory
     |   By default all cache will be stored inside file 'temp/framework/cache'
     |   But you can to define your directory [ex: app/cache ]
     |------------------------------------------------------------------
    */
    'cache_dir' => '',



    /*
     |------------------------------------------------------------------
     |   Session path [ Where session will be saved ]
     |------------------------------------------------------------------
    */
    'session.storage' => false,


    /*
    |------------------------------------------------------------------
    |   Session path [ Where session will be saved ]
    |------------------------------------------------------------------
    */
    'session.path' => '/storage/sessions',




    /*
    |------------------------------------------------------------------
    |   Define Session Key For User Authentication
    |------------------------------------------------------------------
    */
    'user.auth' => 'session.auth',





    /*
    |------------------------------------------------------------------
    |   Token name
    |------------------------------------------------------------------
    */
    'token.name' => '_csrf',



    /*
    |------------------------------------------------------------------
    |   Define Session Key For Flash
    |------------------------------------------------------------------
    */
    'flash.key' => 'session.flash',



    /*
     |------------------------------------------------------------------
     |   Define Session Key For Flash
     |------------------------------------------------------------------
    */
    'cookies' => [

    ]
];