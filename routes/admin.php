<?php

use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->name('admin.')->group(function () {
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

});

/*Route::prefix('admin')->name('admin.')->group(function () {


    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'showForm'])->name('login');
        Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
    });
    Route::middleware(['auth:admin', 'admin'])->group(function () {
        Route::get('/logout', LogoutController::class)->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('projects', ProjectController::class);
        Route::post('/projects/datatable', [ProjectController::class, 'datatable'])->name('projects.datatable');
        Route::post('/projects/document/delete', [ProjectController::class, 'documentDelete'])->name('projects.document.delete');

        Route::resource('apartments', ApartmentController::class);
        Route::post('/apartments/datatable', [ApartmentController::class, 'datatable'])->name('apartments.datatable');
        Route::post('/apartments/document/delete', [ApartmentController::class, 'documentDelete'])->name('apartments.document.delete');

        Route::resource('campaigns', CampaignController::class);
        Route::post('/campaigns/datatable', [CampaignController::class, 'datatable'])->name('campaigns.datatable');

        Route::resource('maturities', MaturityController::class);
        Route::post('/maturities/datatable', [MaturityController::class, 'datatable'])->name('maturities.datatable');

        Route::get('/settings/edit', [SettingController::class, 'edit'])->name('settings.edit');
        Route::post('/settings/update', [SettingController::class, 'update'])->name('settings.update');

        Route::resource('/pages', PageController::class);
        Route::post('/pages/datatable', [PageController::class, 'datatable'])->name('pages.datatable');

        Route::resource('/activities', ActivityController::class);
        Route::post('/activities/datatable', [ActivityController::class, 'datatable'])->name('activities.datatable');

        Route::resource('/news', NewsController::class);
        Route::post('/news/datatable', [NewsController::class, 'datatable'])->name('news.datatable');

        Route::post('/media/store', [MediaController::class, 'store'])->name('media.store');

        Route::resource('offerRates', OfferRateController::class);
    });
});
*/
