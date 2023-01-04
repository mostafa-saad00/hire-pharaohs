<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
*/


Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware('isAdmin')->group(function(){
        Route::view('index', 'admin.main.index')->name('index');
    });

    require __DIR__.'/admin_auth.php';
});


