<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('gallery.welcome');
});

Route::get('/gallery/{page}', [GalleryController::class, 'showPage'])->where('page', '[1-9]|1[0-2]');
