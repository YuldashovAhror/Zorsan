<?php

use App\Http\Controllers\Dashboard\ArxitekturaController;
use App\Http\Controllers\Dashboard\BlockController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\GalleryController;
use App\Http\Controllers\Dashboard\PresentationController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\ProductShowController;
use App\Http\Controllers\Dashboard\SecondSliderController;
use App\Http\Controllers\Dashboard\WordController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

//Localization
// Route::get('/ru', function () {
//     session()->put('locale', 'ru');
//     return redirect()->back();
// })->name('languages');
// Route::get('/uz', function () {
//         session()->put('locale', 'uz');
//         return redirect()->back();
// })->name('languages');
Route::get('/languages/{loc}', function ($loc) {
    if (in_array($loc, ['en', 'ru', 'uz'])) {
        session()->put('locale', $loc);
    }
    return redirect()->back();
});


//Front
Route::get('/', [\App\Http\Controllers\Front\FrontController::class, 'index'])->name('main');

//Dashboard
Route::group(['prefix' => 'dashboard'], function (){
    Route::name('dashboard.')->group(function (){

        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('index');
        Route::resource('/productshow', ProductShowController::class);
        Route::resource('/arxitektura', ArxitekturaController::class);
        Route::resource('/category', CategoryController::class);
        Route::resource('/product', ProductController::class);
        Route::resource('/gallery', GalleryController::class);
        Route::resource('/secondslider', SecondSliderController::class);
        Route::resource('/block', BlockController::class);
        Route::resource('/presentation', PresentationController::class);
        Route::get('/optimize', function () {
            \Illuminate\Support\Facades\Artisan::call('route:clear');
            \Illuminate\Support\Facades\Artisan::call('cache:clear');
            \Illuminate\Support\Facades\Artisan::call('config:clear');
            \Illuminate\Support\Facades\Artisan::call('config:cache');
            \Illuminate\Support\Facades\Artisan::call('route:cache');
            \Illuminate\Support\Facades\Artisan::call('optimize:clear');
            return 'success';
        });
        Route::get('dashboard/words', [WordController::class, 'index'])->name('words.index');

    });
});


require __DIR__.'/auth.php';
