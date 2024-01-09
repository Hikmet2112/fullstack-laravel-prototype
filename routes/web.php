<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/category/{category}',[PublicController::class, 'categoryShow'])->name('categoryShow');

//ROTTE ARTICLE
Route::resource('article', ArticleController::class); 

// ROTTA PER REVISORE
Route::get('/revisor/home',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index'); 

// ACCETTA ANNUNCIO
 Route::patch('/accetta/annuncio/{article}',[RevisorController::class,'acceptArticle'])->middleware('isRevisor')->name('revisor.accept_article'); 

//  RIFIUTA ANNUNCIO

Route::patch('/rifiuta/annuncio/{article}',[RevisorController::class,'rejectArticle'])->middleware('isRevisor')->name('revisor.reject_article');

// RICHIEDI DI DIVENTARE REVISORE 

Route::get('/richiesta/revisore',[RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');  

// RENDI REVISORE 

Route::get('/rendi/revisore/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');   

