<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


//rotta pagina welcome
Route::get('/',[PublicController::class, 'welcome'])->name('Home');


//rotta pagina contatti
Route::get('/contacts.email',[PublicController::class,'emailed'])->name('contatti');

Route::post('/contacts.submit',[PublicController::class,'contactSubmit'])->name('invia.dati');