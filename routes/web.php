<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware'=> 'auth'], function(){
    Route::get('/', [MainController::class, 'main']);

    Route::get('application/{application}/answer', [AnswerController::class, 'create'])->name('answers.create');
    Route::post('application/answer', [AnswerController::class, 'store'])->name('answers.store');

    Route::resource('application', ApplicationController::class);

    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

});





require __DIR__.'/auth.php';
