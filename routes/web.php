<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

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
    return view('Components.Master');
});

Route::get('/categorie',[categorieController::class,'index'])->name('categorie.index');
Route::get('/categorie/create',[categorieController::class,'create'])->name('categorie.create');
Route::post('/categorie/store',[categorieController::class,'store'])->name('categorie.store');
Route::delete('/categorie/{categorie}',[categorieController::class,'destroy'])->name('categorie.destroy');
Route::get('/categorie/edit/{categorie}',[categorieController::class,'edit'])->name('categorie.edit');
Route::put('/categorie/update/{categorie}',[categorieController::class,'update'])->name('categorie.update');
