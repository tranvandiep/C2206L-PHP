<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//URL -> routing -> Trả dữ liệu về client
Route::get('/test', function() {
    return '<h1>Hello Test</h1>';
});

//URL -> routing -> view -> Trả kết quả về
Route::get('/test2', function() {
    return view('test2');
});

//URL -> routing -> controller (Xử lý logic + model) -> Trả kết quả về
Route::get('/test3', [App\Http\Controllers\TestController::class, 'index']);

//URL -> routing -> controller (Xử lý logic + model) -> view -> Trả kết quả về
Route::get('/test4', [App\Http\Controllers\TestController::class, 'test4']);
Route::get('/test4/a.html', [App\Http\Controllers\TestController::class, 'test4']);
Route::get('/test4/b', [App\Http\Controllers\TestController::class, 'test4']);
Route::get('/test4/c', [App\Http\Controllers\TestController::class, 'test4']);
