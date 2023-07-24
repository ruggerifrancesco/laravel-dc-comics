<?php

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home'])->name('guest.home');
Route::get('/comics', [PageController::class, 'indexComics'])->name('guest.comics.index');

Route::get('/admin', [AdminPageController::class, ''])->name('admin.home');
Route::get('/admin/comics', [AdminPageController::class, ''])->name('admin.comics.index');
