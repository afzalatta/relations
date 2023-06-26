<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('relationship')->group(function () {
    Route::get('manytomany',[\App\Http\Controllers\OrderController::class, 'user_order'])->name('manytomany');
    Route::get('onetomany',[\App\Http\Controllers\ProductController::class, 'get_product'])->name('onetomany');
    Route::get('onetoone',[\App\Http\Controllers\ProductController::class, 'single_order'])->name('onetoone');


});
