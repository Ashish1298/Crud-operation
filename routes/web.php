<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/crud',[PersonController::class,'index'])->name('crud');
Route::post('/crud',[PersonController::class,'store'])->name('crud.store');
Route::get('edit/{id}',[PersonController::class,'edit'])->name('edit');
Route::post('update/{id}',[PersonController::class,'update'])->name('update');
Route::get('delete/{id}',[PersonController::class,'delete'])->name('delete');