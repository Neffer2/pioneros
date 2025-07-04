<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RankingController;

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
    return redirect()->route('login');
});

Route::get('/importar', function () {
    return view('sections.import');
})->middleware(['auth', 'is_admin'])->name('importar');

Route::get('/about', function () {
    return view('sections.pioneros-about');
})->middleware(['auth'])->name('about');

Route::get('/ranking', [RankingController::class, 'index'])->middleware(['auth'])->name('ranking');

Route::get('/cronograma', function () {
    return view('sections.cronograma');
})->middleware(['auth'])->name('cronograma');

Route::get('/premios', function () {
    return view('sections.premios');
})->middleware(['auth'])->name('premios');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
