<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\SlidersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;

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
Route::get('/',[App\Http\Controllers\FrontController::class,'index'])->name('front.index');
/* Route::get('/', function () {
    return view('tp');
}); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('articles', ArticlesController::class);
Route::resource('sliders',SlidersController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::get('/actualites', [App\Http\Controllers\PostController::class, 'index'])->name('actualites.index');
Route::get('/actualites/{article}', [App\Http\Controllers\PostController::class, 'show'])->name('actualites.show');
Route::get('/search',[App\Http\Controllers\PostController::class, 'search'])->name('actualites.search');