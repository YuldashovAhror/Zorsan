<?php

use App\Http\Controllers\Dashboard\ArxitekturaController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ProductShowController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

//Localization
Route::get('/ru', function () {
    session()->put('locale', 'ru');
    return redirect()->back();
})->name('languages');
Route::get('/uz', function () {
        session()->put('locale', 'uz');
        return redirect()->back();
})->name('languages');

//Front
Route::get('/', [\App\Http\Controllers\Front\FrontController::class, 'index'])->name('main');

//Dashboard
Route::group(['prefix' => 'dashboard'], function (){
    Route::name('dashboard.')->group(function (){

        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('index');
        Route::resource('/productshow', ProductShowController::class);
        Route::resource('/arxitektura', ArxitekturaController::class);
        Route::resource('/category', CategoryController::class);

    });
});


require __DIR__.'/auth.php';
