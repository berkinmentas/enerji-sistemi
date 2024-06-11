<?php

use App\Http\Controllers\Admin\BranchOfficeController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\LogoutController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'loginPageShow'])->name('login.page');
        Route::post('/login', [LoginController::class, 'login'])->name('auth');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
        Route::resource('/dashboard', DashboardController::class);
        Route::resource('/contacts', ContactController::class);
        Route::post('/contacts/datatable', [ContactController::class, 'datatable'])->name('contacts.datatable');
        Route::resource('/products', ProductController::class);
        Route::post('/products/datatable', [ProductController::class, 'datatable'])->name('products.datatable');
        Route::get('/settings/edit', [SettingController::class, 'edit'])->name('settings.edit');
        Route::post('/settings/update', [SettingController::class, 'update'])->name('settings.update');
        Route::resource('/pages', PageController::class);
        Route::post("/pages/datatable", [PageController::class, 'datatable'])->name('pages.datatable');
        Route::post('/media/store', [MediaController::class, 'store'])->name('media.store');
        Route::resource('/comments', CommentController::class);
        Route::post('/comments/datatable', [CommentController::class, 'datatable'])->name('comments.datatable');
        Route::resource('/productCategories', ProductCategoryController::class);
        Route::post('/productCategories/datatable', [ProductCategoryController::class, 'datatable'])->name('productCategories.datatable');
        Route::resource('/branchOffices', BranchOfficeController::class);
        Route::post('/branchOffices/datatable', [BranchOfficeController::class, 'datatable'])->name('branchOffices.datatable');
        Route::resource('/galleries', GalleryController::class);
        Route::post('/galleries/datatable', [GalleryController::class, 'datatable'])->name('galleries.datatable');
        Route::post('/delete-image', [GalleryController::class, 'deleteImage'])->name('galleries.deleteImage');
    });
});
