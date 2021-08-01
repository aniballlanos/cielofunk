<?php

use App\Http\Controllers\CatalogController;
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
Route::get('/', [CatalogController::class, 'index']);
Route::get('/search', [CatalogController::class, 'index'])->name('catalogue.index');
Route::post('/search', [CatalogController::class, 'search'])->name('catalogue.search');
Route::get('/search/{design}', [CatalogController::class, 'show'])->name('catalogue.show');
