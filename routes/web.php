<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pemesanan/', [PemesananController::class, 'index'])->middleware('auth');
Route::get('/pemesanan/form/', [PemesananController::class, 'create'])->middleware('auth');
Route::post('/pemesanan/store/', [PemesananController::class, 'store'])->middleware('auth');
Route::get('/pemesanan/edit/{id}', [PemesananController::class, 'edit'])->middleware('auth');
Route::put('/pemesanan/{id}', [PemesananController::class, 'update'])->middleware('auth');
Route::delete('/pemesanan/{id}', [PemesananController::class, 'destroy'])->middleware('auth');

