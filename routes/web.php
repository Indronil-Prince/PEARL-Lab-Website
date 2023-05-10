<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', [TaskController::class, 'index']);
Route::get('/people', [HomeController::class, 'people']);
Route::get('/research', [TaskController::class, 'research']);
Route::post('/publications', [TaskController::class, 'store'])->name('update');
Route::post('/news', [TaskController::class, 'storenews'])->name('updatenews');
Route::get('/news', [TaskController::class, 'news'])->name('news-list');
Route::get('/publications', [TaskController::class, 'publications'])->name('publications-list');

Auth::routes();
Route::get('/member-register', [TaskController::class, 'checkAccess']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/member-register', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

