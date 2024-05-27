<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\BranchOfficeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get( '/', [HomeController::class, 'index'])->name('home');
Route::get( '/iletisim', [ContactController::class, 'index'])->name('contacts');
Route::post( '/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::view('/hakkimizda', 'about');
Route::view('/misyonumuz', 'missions');
Route::get('/urunler', [ProductController::class, 'index'])->name('products.index');
Route::view('/tum-pv-paket-sistemleri', 'pvPackages');
Route::get('/urun/{product_id}', [ProductController::class, 'show'])->name('products.show');
Route::get( '/sayfalar/{slug}', [HomeController::class, 'page'])->name('page.show');
Route::get('/subelerimiz', [BranchOfficeController::class, 'index'])->name('branchOffice.index');

include 'admin.php';
