<?php
return [

    /*
     |-----------------------------------------------------------------------------------------------------------
     |   Here define global default layout
     |   You must set your view path
     |   - layout    : Global setting of layout. This layout will be used all other application.
     |   - extension : view extensions [ twig, blade ..] will be enabled later
     |   - cacheDir  : Specify the directory caching application views
     |   - compress  : Used for compressing content page it optimize rendering content. (boolean: true|false)
     |------------------------------------------------------------------------------------------------------------
    */

    'root'      => 'resources/views',
    'layout'    => false, // 'layouts/default'
    'extension' => false,
    'compress'  =>  false
];