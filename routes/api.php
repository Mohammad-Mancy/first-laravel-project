<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\palindromecontroller;
// use App\Http\Controllers\Pal;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/Palindromes',[Pal::class, 'getPalin'])->name("Pal");
// Route::get('/Palindromes',[Pal::class,'palin'])->name("get-pal");