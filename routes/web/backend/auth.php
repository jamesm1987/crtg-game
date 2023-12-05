<?php

use App\Http\Controllers\Backend\Auth\Login\Controller as LoginController;


Route::group(['as' => 'auth.', 'prefix' => 'auth', 'namespace' => 'Auth'], function () {
    
    //Logout
    Route::post('logout', [
        'uses' => 'Logout\Controller@submit',
    ])->name('logout');
        
    //Login
    Route::group(['middleware' => 'guest:backend'], function () {

        Route::get('login', [
            LoginController::class, 'view',
        ])->name('login');  
        
        Route::post('authenticate', [
            'uses' => 'Authenticate\Controller@submit',
        ])->name('authenticate');
    
    });

});