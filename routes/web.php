<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LuxeController;

Route::get('/', [LuxeController::class, 'home'])->name('home');
Route::get('/collection', [LuxeController::class, 'collection'])->name('collection');
Route::get('/produit/{id}', [LuxeController::class, 'produit'])->name('produit');
Route::get('/editorial', [LuxeController::class, 'editorial'])->name('editorial');
Route::get('/contact', [LuxeController::class, 'contact'])->name('contact');
Route::get('/produit/{id}/details', [LuxeController::class, 'details'])->name('produit.details');
