<?php

use Illuminate\Support\Facades\Route;

Route::name('students.')->prefix('/students')->group(function() {
	Route::get('/', [App\Http\Controllers\StudentController::class, 'index'])->name('index');
	Route::get('/create', [App\Http\Controllers\StudentController::class, 'create'])->name('create');
	Route::post('/post', [App\Http\Controllers\StudentController::class, 'post'])->name('post');
	Route::get('/edit/{id}', [App\Http\Controllers\StudentController::class, 'edit'])->name('edit');
	Route::post('/update', [App\Http\Controllers\StudentController::class, 'update'])->name('update');
	Route::post('/delete', [App\Http\Controllers\StudentController::class, 'delete'])->name('delete');
});