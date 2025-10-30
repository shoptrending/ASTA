<?php

declare(strict_types=1);

use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'))->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/', fn () => view('welcome'))->name('home');
Route::get('/login', [AuthController::class, 'login'])->name('login');

// Todo: add the middleware when a login page is added...
// Route::middleware('auth:sanctum')->group(function ()
// {
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminNewsController::class, 'index'])->name('admin.news.index');
Route::get('/admin/create', [AdminNewsController::class, 'createArticle'])->name('admin.news.create');

Route::post('/admin', [AdminNewsController::class, 'store'])->name('admin.news.store');

// });
