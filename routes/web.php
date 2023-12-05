<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

$dir = __DIR__ . '/web';

require $dir . '/backend.php'; 

require $dir . '/frontend.php'; 

//Reset form view
Route::get('reset-password/{token}', [
    'uses' => 'Frontend\Password\Reset\Form\Controller@view',
])->name('password.reset');