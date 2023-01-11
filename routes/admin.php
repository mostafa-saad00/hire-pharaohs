<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminFreelancerController;
use App\Http\Livewire\Admin\Freelancer\Freelancers;
use App\Http\Livewire\Admin\Employer\Employers;
use App\Http\Controllers\AdminFileController;
use App\Http\Controllers\AdminEmployerController;

// Admin Freelancer 
Route::get('admin/freelancers', Freelancers::class)->middleware(['isAdmin'])->name('index-admin-freelancers');
Route::controller(AdminFreelancerController::class)->middleware(['isAdmin'])->group(function () {
    Route::get('admin/freelancer/create', 'create')->name('admin-create-freelancer');
    Route::post('admin/freelancer/store', 'store')->name('admin-store-freelancer');
    Route::get('admin/freelancer/{freelancer}', 'show')->name('admin-show-freelancer');

});
// End Admin Freelancer

// Admin Employer 
Route::get('admin/employers', Employers::class)->middleware(['isAdmin'])->name('index-admin-employers');
Route::controller(AdminEmployerController::class)->middleware(['isAdmin'])->group(function () {
    Route::get('admin/employer/create', 'create')->name('admin-create-employer');
    Route::post('admin/employer/store', 'store')->name('admin-store-employer');
    Route::get('admin/employer/{employer}', 'show')->name('admin-show-employer');

});
// End Admin Employer




// Filepond routes
Route::controller(AdminFileController::class)->middleware(['isAdmin'])->group(function () {
    Route::post('/admin/store', 'store')->name('store-admin-file');

    Route::post('/admin/tmp-upload/{admin}', 'tmpUpload');
    
    Route::delete('/admin/tmp-delete/{admin}', 'tmpDelete');

});
// End Filepond routes



Route::prefix('admin')->name('admin.')->group(function(){
    
    Route::middleware('isAdmin')->group(function(){
        Route::view('index', 'admin.main.index')->name('index');

    });

    require __DIR__.'/admin_auth.php';
});


