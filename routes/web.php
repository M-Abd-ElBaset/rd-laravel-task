<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EncryptionController;


Route::get('/', function () {
    return view('home');
});

Route::post('/encrypt', [EncryptionController::class, 'encrypt'])->name('encrypt-file');
Route::post('/decrypt', [EncryptionController::class, 'decrypt'])->name('decrypt-file');
