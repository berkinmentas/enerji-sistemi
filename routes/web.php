<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [HomeController::class, 'index'])->name('home');
Route::get( '/iletisim', [ContactController::class, 'index'])->name('contacts');
Route::post( '/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::view('/hakkimizda', 'about');
Route::view('/misyonumuz', 'missions');
Route::view('/tum-gunes-enerji-sistemleri', 'solarHeatings');
Route::view('/tum-pv-paket-sistemleri', 'pvPackages');
Route::view('/gunes-enerjisi', 'productDetail');


include 'admin.php';
