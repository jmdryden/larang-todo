<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
    
    // We can relocate and reroute all our views in public folder. This
    // is a good practice when we’re using Single Page Application such as Angular into 
    // our web app and unify all files in public section, including views.
    // By default, our views were located in resource folder. Change it to public/views
    // which is good practice for a Single Page Application

    'paths' => [
        //realpath(base_path('resources/views')), // moved to public for AngularJS
        realpath(base_path('public/views')), // JMD put all views to public/views for AngularJS single page use
    ],

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */

    'compiled' => realpath(storage_path('framework/views')),

];
