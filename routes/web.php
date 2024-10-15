<?php

use App\Http\Controllers\PaintingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaintingController::class, 'showPaintings']);
Route::get('/paintings/{title}', [PaintingController::class, 'showPainting']);
Route::post('/paintings/search-by-title', [PaintingController::class, 'searchByTitle']);
Route::post('/paintings/search-by-artist', [PaintingController::class, 'searchByArtist']);