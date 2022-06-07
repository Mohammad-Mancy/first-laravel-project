<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcontroller;

Route::get('/palindrome',[testcontroller::class, 'getPalin'])->name("Pal");
Route::get('/passedseconds',[testcontroller::class, 'getseconds'])->name("get-seconds");
Route::get('/teams',[testcontroller::class,'getTeamOfTwo'])->name('getteam');
// Route::get('')
