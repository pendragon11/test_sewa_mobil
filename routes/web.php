<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;

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

Route::get('admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index'); 
Route::get('login', [\App\Http\Controllers\UserController::class, 'index'])->name('login');
Route::get('register', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::post('/insertuser', [UserController::class, 'insertuser'])->name('insertuser');
Route::post('/loginproses', [UserController::class, 'loginproses'])->name('loginproses');

Route::get('/datamobil', [CarController::class, 'index'])->name('datamobil'); 
Route::get('tambahdata', [CarController::class, 'tambahdata'])->name('tambahdata'); 
Route::get('/beranda', [CarController::class, 'beranda'])->name('beranda'); 
Route::post('insert', [CarController::class, 'insert'])->name('insert'); 
Route::get('/tampilkandata/{id}', [CarController::class, 'tampilkandata'])->name('tampilkandata'); 
Route::post('/updatedata/{id}', [CarController::class, 'updatedata'])->name('updatdata'); 
Route::post('/sewa/{id}', [CarController::class, 'sewa'])->name('sewa'); 
Route::post('/dikembalikan/{id}', [CarController::class, 'dikembalikan'])->name('dikembalikan'); 

Route::get('/tampilkansewa/{id}', [CarController::class, 'tampilkansewa'])->name('tampilkansewa'); 

Route::get('/disewakan', [CarController::class, 'disewa'])->name('disewa');
Route::get('/dikembalikanpage/{id}', [CarController::class, 'dikembalikanview'])->name('dikembalikanview');  

Route::get('/delete/{id}', [CarController::class, 'delete'])->name('delete'); 




                                                                                                                                