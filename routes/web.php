<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\ComicsController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Guest Side Client
Route::get('/', [PageController::class, 'home'])->name('guest.home');
Route::get('/comics', [PageController::class, 'index'])->name('guest.comics.index');


// Admin Side Client
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminPageController::class, 'home'])->name('home'); // Panello Generale Admin
    Route::resource('/comics', ComicsController::class); // Risorsa Comics * Only for ADMIN
    Route::get('/comics/{id}', [ComicsController::class, 'show'])->name('comic.show');
});
