<?php

use Illuminate\Support\Facades\Route;
use App\Http\Conts\LuxeCont;

Route::get('/', [LuxeCont::class, 'home'])->name('home');
Route::get('/collection', [LuxeCont::class, 'collection'])->name('collection');
Route::get('/produit/{id}', [LuxeCont::class, 'produit'])->name('produit');
Route::get('/editorial', [LuxeCont::class, 'editorial'])->name('editorial');
Route::get('/contact', [LuxeCont::class, 'contact'])->name('contact');
Route::get('/produit/{id}/details', [LuxeCont::class, 'details'])->name('produit.details');
