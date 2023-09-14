<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\ComicController;

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

Route::get('/', [ComicController::class, 'home'])->name('home');

Route::get('/contatti', [ComicController::class, 'contatti'])->name('contatti');

Route::get('/chi_siamo', [ComicController::class, 'chi_siamo'])->name('chi_siamo');

Route::get('/documentazione', [ComicController::class, 'documentazione'])->name('documentazione');

Route::resource('comics', ComicController::class);