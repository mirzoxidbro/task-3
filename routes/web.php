<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=> 'auth'], function(){
    Route::get('/', [MainController::class, 'main']);

    Route::resource('application', ApplicationController::class);

    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

});





require __DIR__.'/auth.php';
