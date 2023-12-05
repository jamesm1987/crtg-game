<?php

Route::group(['as' => 'backend.', 'namespace' => 'Backend', 'prefix' => 'backend'], function () {
    
    $dir = __DIR__ . '/backend';
    
    //Auth
    require ($dir . '/auth.php');
    
    //Authorised users only
    Route::group(['middleware' => ['auth:backend', 'permission:access-backend']], function () use($dir) {
        
        //Dashboard
        Route::get('/', [
            'uses' => 'Dashboard\Controller@view',
        ])->name('dashboard');
        
    });

});