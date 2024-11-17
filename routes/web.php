<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatController;
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

// routes for categorie
Route::get('/categorie',[categorieController::class,'index'])->name('categorie.index');
Route::get('/categorie/create',[categorieController::class,'create'])->name('categorie.create');
Route::post('/categorie/store',[categorieController::class,'store'])->name('categorie.store');
Route::delete('/categorie/{categorie}',[categorieController::class,'destroy'])->name('categorie.destroy');
Route::get('/categorie/edit/{categorie}',[categorieController::class,'edit'])->name('categorie.edit');
Route::put('/categorie/update/{categorie}',[categorieController::class,'update'])->name('categorie.update');
Route::get('/categorie/show/{categorie}',[categorieController::class,'show'])->name('categorie.show');

// routes for plat
Route::get('/plat',[PlatController::class,'index'])->name('plat.index');
Route::get('/plat/create',[PlatController::class,'create'])->name('plat.create');
Route::post('/plat/store',[PlatController::class,'store'])->name('plat.store');
Route::delete('/plat/{plat}',[PlatController::class,'destroy'])->name('plat.destroy');
Route::get('/plat/edit/{plat}',[PlatController::class,'edit'])->name('plat.edit');
Route::put('/plat/update/{plat}',[PlatController::class,'update'])->name('plat.update');