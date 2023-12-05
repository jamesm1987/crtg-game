<?php

Route::group(['as' => 'password.', 'prefix' => 'password', 'middleware' => 'guest', 'namespace' => 'Password'], function () {
    
    //Lost password
    Route::group(['as' => 'lost.', 'prefix' => 'lost', 'namespace' => 'Lost'], function () {
        
        //Form view
        Route::get('/', [
            'uses' => 'Form\Controller@view',
        ])->name('form');
        
        //Form submit
        Route::post('submit', [
            'uses' => 'Submit\Controller@request',
        ])->name('submit');
    
    });

    //Reset password form submit
    Route::post('reset', [
        'uses' => 'Reset\Submit\Controller@submit',
    ])->name('reset.submit');

});