<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Freelancer Routes
*/


Route::prefix('freelancer')->name('freelancer.')->group(function(){

    Route::middleware('isFreelancer')->group(function(){
        Route::view('index', 'freelancer.main.index')->name('index');
    });

    require __DIR__.'/freelancer_auth.php';
});

