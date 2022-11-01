<?php
return [

    /*
     |-----------------------------------------------------------------------------------------------------------
     |   Here define global default layout
     |   You must set your view path
     |   - layout    : Global setting of layout. This layout will be used all other application.
     |   - extension : twig, blade ... ( default extension tpl.php )
     |   - cacheDir  : Specify the directory caching application views
     |   - compress  : Used for compressing content page it optimize rendering content. (boolean: true|false)
     |------------------------------------------------------------------------------------------------------------
    */
    'root'      => 'resources/views',
    'layout'    => 'layouts/default',
    'extension' => 'tpl.php', // twig, blade ...
    'cacheDir'  =>  '/tmp/cache/app/views',
    'compress'  =>  true
];