<?php
use App\Http\Controllers\GenresController;
use App\Http\Controllers\AuthorsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// ROUTE GENRE
Route::get('/genre',[GenresController::class, 'index'])->name('genre.index');
Route::get('/genre/create',[GenresController::class,'create'])->name('genre.create');
Route::post('/genre/create',[GenresController::class,'store'])->name('genre.store');
Route::get('/genre/edit/{id}',[GenresController::class,'edit'])->name('genre.edit');
Route::put('/genre/edit/{id}',[GenresController::class,'update'])->name('genre.update');
Route::delete('/genre/delete/{id}',[GenresController::class,'destroy'])->name('genre.destroy');
//END ROUTE GENRE

// Route author
Route::get('/author', [AuthorsController::class,'index'])->name('penulis.index');
Route::get('/author/create', [AuthorsController::class,'create'])->name('penulis.create');
Route::post('/author/create', [AuthorsController::class , 'store'])->name('penulis.store');
Route::get('/author/show{id}', [AuthorsController::class , 'show'])->name('penulis.show');
Route::delete('/author/delete{id}', [AuthorsController::class , 'destroy'])->name('penulis.destroy');
// END Route author
