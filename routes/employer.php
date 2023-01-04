<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Employer Routes
*/


Route::prefix('employer')->name('employer.')->group(function(){

    Route::middleware('isEmployer')->group(function(){
        Route::view('index', 'employer.main.index')->name('index');
    });

    require __DIR__.'/employer_auth.php';
});


