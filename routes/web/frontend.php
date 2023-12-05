<?php

Route::group(['as' => 'frontend.', 'middleware' => 'preload.links', 'namespace' => 'Frontend'], function () {
    
    $dir = __DIR__ . '/frontend';
    
    //Frontend Auth
    require $dir . '/auth.php';
    
    //Lost Password
    require $dir . '/password.php';
    
    //Authorised users only
    Route::group(['middleware' => ['auth', 'role:user']], function () use ($dir) {
        
        
    });

});