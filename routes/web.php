<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/**
 * Rutas Bases para iniciar el proyecto (Temporalmente)
 */

// Rutas públicas
Route::view('/', 'pages.website.index')->name('home');
Route::view('/about', 'pages.website.about')->name('about');
Route::view('/projects', 'pages.website.projects')->name('projects');
Route::view('/blog', 'pages.website.blog')->name('blog');

Route::get('/dashboard', function () {
    return view('pages.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
