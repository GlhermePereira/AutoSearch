<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController; // Corrigido o namespace aqui

Route::get('/', function () {
    return view('AutoSuggest.index');
});

Route::view('auto-suggest', 'AutoSuggest.index');
Route::get('/search', [ProductsController::class, 'search']);
