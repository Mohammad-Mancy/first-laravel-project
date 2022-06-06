<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\palindromecontroller;
use App\Http\Controllers\timecontroller;


Route::get('/palindrome',[palindromecontroller::class, 'getPalin'])->name("Pal");
Route::get('/passedseconds',[timecontroller::class, 'getseconds'])->name("get-seconds");