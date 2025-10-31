<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\VacanciesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.welcome'))->name('home');

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');

// Todo: add the middleware when a login page is added...
// Route::middleware('auth:sanctum')->group(function ()
// {
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

// Dashboard...
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard.index');

// Vacancies...
Route::get('/admin/vacancies', [VacanciesController::class, 'index'])
    ->name('admin.vacancies.index');

// Contact...
Route::get('/admin/contact', [ ContactController::class, 'index'])
    ->name('admin.contact.index');

// News...
//Route::resource('/admin/news', NewsController::class)
//    ->names('admin.news')
//    ->parameters(['news' => 'article']);

Route::get('/admin/news', [NewsController::class, 'index'])
    ->name('admin.news.index');

Route::get('/admin/news/create', [NewsController::class, 'create'])
    ->name('admin.news.create');

Route::get('/admin/news/{article}/edit', [NewsController::class, 'edit'])
    ->name('admin.news.edit');

Route::patch('/admin/news/{article}', [NewsController::class, 'update'])
    ->name('admin.news.update');

Route::delete('/admin/news/{article}', [NewsController::class, 'destroy'])
    ->name('admin.news.destroy');

Route::post('/admin', [NewsController::class, 'store'])->name('admin.news.store');
// });
