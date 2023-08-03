<?php

use App\Http\Controllers\PictureController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

//!route for home page
Route::get('/', [PublicController::class, 'index'])->name('home');
//!route per dettaglio prodotto
Route::get('/dettaglio-prodotto-home/{id}', [PublicController::class, 'show'])->name('dettaglioProdottoHome');

//!QUADRI
//!route per home page venditore
Route::get('/quadri', [PictureController::class, 'index'])->name('homeUser')->middleware(['auth']);
//!route per crea annuncio venditore
Route::get('/crea-annuncio', [PictureController::class, 'create'])->name('creaAnnuncio')->middleware(['auth']);
//!route funzione store annuncio(scrittura record);
Route::post('/crea-annuncio', [PictureController::class, 'store'])->name('storeAnnuncio')->middleware(['auth']);
//!route per dettaglio prodotto
Route::get('/dettaglio-prodotto/{id}', [PictureController::class, 'show'])->name('dettaglioProdotto')->middleware(['auth']);
//!route per modifica articolo
Route::get('/modifica-annuncio/{id}', [PictureController::class, 'edit'])->name('modificaAnnuncio')->middleware(['auth']);
//!route per inviare le modifiche e registrarle nel record
Route::put('/modifica-annuncio/{id}', [PictureController::class, 'update'])->name('inviaModificheAnnuncio')->middleware(['auth']);
//!route per eliminazione annuncio
Route::delete('/elimina-annuncio/{id}', [PictureController::class, 'destroy'])->name('eliminaAnnuncio')->middleware(['auth']);







