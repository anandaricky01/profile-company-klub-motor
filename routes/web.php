<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('home');
// })->name('home');

// route for index
Route::get('/', [HomeController::class, 'index'])->name('home');

// route for profile
Route::group(['prefix' => 'profile'], function(){
    Route::get('/tentang-kami', [HomeController::class, 'tentang_kami'])->name('tentang_kami');
    Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
});

Route::group(['prefix' => 'article'], function(){
    Route::get('/', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/show', [ArticleController::class, 'show'])->name('article.show');
});

Route::group(['prefix' => 'event'], function(){
    Route::get('/', [EventController::class, 'index'])->name('event.index');
    Route::get('/show', [EventController::class, 'show'])->name('event.show');
});

Route::group(['prefix' => 'gallery'], function(){
    Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
});

Route::group(['prefix' => 'product'], function(){
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/show', [ProductController::class, 'show'])->name('product.show');
});
