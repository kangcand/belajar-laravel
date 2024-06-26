<?php
// import controller
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PenulisController;
use Illuminate\Support\Facades\Route;

Route::get('film', function () {
    $film = App\Models\Film::all();
    return view('film.daftar_film', compact('film'));
});

Route::get('film/{id}', function ($id) {
    $film = App\Models\Film::findOrFail($id);
    return view('film.detail_film', compact('film'));
});

// route with controller
Route::get('perkenalan', [MyController::class, 'introduce']);
Route::get('hewan', [MyController::class, 'animals']);

// route movie
Route::get('movie', [MovieController::class, 'getMovie'])->middleware('auth');
Route::get('movie/{id}', [MovieController::class, 'getMovieById']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('penulis', PenulisController::class);
    Route::resource('genre', GenreController::class);
    Route::resource('buku', BukuController::class);
});

// Route guest(tamu / pengunjung)
Route::get('/', [FrontController::class, 'buku']);
Route::get('buku/{id}', [FrontController::class, 'detailBuku']);
