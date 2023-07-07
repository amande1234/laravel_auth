<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact/view', [ContactController::class,'view']);
Route::get('/contact/list', [ContactController::class,'list']);
Route::post('/contact', [ContactController::class,'submit']);
Route::get('/contact/list/delete/{id}', [ContactController::class,'delete']);
Route::get('/contact/list/edit/{id}', [ContactController::class,'edit']);

Route::post('/contact/list/edit', [ContactController::class,'edit_question']);
