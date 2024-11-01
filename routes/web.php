<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResiController;



Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('test');
});

// routes/web.php
Route::get('/resi/{noResi}', [ResiController::class, 'show'])->name('resi.show');
Route::post('/resi/{noResi}/confirm-arrival', [ResiController::class, 'confirmArrival'])->name('resi.confirmArrival');

