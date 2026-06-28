<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class,'index'])->name('index');
Route::post('create',[StudentController::class,'create'])->name('create');
Route::get('/formview', [StudentController::class, 'showData'])->name('formview');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [StudentController::class, 'update'])->name('update');
Route::get('/delete/{id}', [StudentController::class, 'destroy'])->name('delete');   