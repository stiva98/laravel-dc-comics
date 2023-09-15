<?php

use Illuminate\Support\Facades\Route;
//Models
use App\Models\Comic;


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

Route::get('/',  function() {
    $comics = Comic::all();
    return view('home', compact('comics'));
})->name('home');

// Route::get('/contatti', function() {
//     return view('contatti');
// })->name('contatti');

// Route::get('/chi_siamo', function() {
//     return view('chi_siamo');
// })->name('chi_siamo');

// Route::get('/documentazione', function() {
//     return view('contatti');
// })->name('documentazione');

Route::resource('comics', ComicController::class);