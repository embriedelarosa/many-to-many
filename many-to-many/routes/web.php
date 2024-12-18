<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgressesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/progresses', [ProgressesController::class, 'index'])->name('progresses.index');

