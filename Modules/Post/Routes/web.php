<?php

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

use \Modules\Post\Http\Controllers\PostController;

Route::prefix('post')->group(function() {
    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('/create', [PostController::class, 'create'])->name('post.create');
    Route::post('/store', [PostController::class, 'store'])->name('post.store');
    Route::get('/{slug}', [PostController::class, 'show'])->name('post.show');
    Route::post('/{slug}', [PostController::class, 'update'])->name('post.update');
    Route::delete('/{slug}', [PostController::class, 'delete'])->name('post.delete');
});
