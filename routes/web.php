<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\VacanciesController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.welcome'))
    ->name('home');

Route::get('/login', [AuthController::class, 'create'])
    ->name('auth.create');

Route::post('/login', [AuthController::class, 'login'])
    ->name('auth.login');

Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->group(function () : void
    {
        // Logout...
        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('logout');

        // Dashboard...
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard.index');

        // Vacancies...
        Route::get('/vacancies', [VacanciesController::class, 'index'])
            ->name('vacancies.index');

        // Contact...
        Route::get('/contact', [ContactController::class, 'index'])
            ->name('contact.index');

        // News...
        Route::get('/news', [NewsController::class, 'index'])
            ->name('news.index');

        Route::get('/news/create', [NewsController::class, 'create'])
            ->name('news.create');

        Route::post('/news', [NewsController::class, 'store'])
            ->name('news.store');

        Route::get('/news/{article}/edit', [NewsController::class, 'edit'])
            ->name('news.edit');

        Route::patch('/news/{article}', [NewsController::class, 'update'])
            ->name('news.update');

        Route::delete('/news/{article}', [NewsController::class, 'destroy'])
            ->name('news.destroy');
    });

// Fallback for non-existing routes...
Route::fallback(function () : RedirectResponse
{
    return redirect('/');
});
