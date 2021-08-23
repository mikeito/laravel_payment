<?php

use App\Http\Controllers\Donation;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Donation::class, 'index'])->name('index');
Route::get('/thanks', [Donation::class, 'status'])->name('thanks');
Route::post('/donate', [Donation::class, 'donate'])->name('donate');
