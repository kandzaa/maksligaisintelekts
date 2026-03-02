<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

// Latviski routes
Route::prefix('lv')->group(function () {
    Route::view('/', 'template.lv.home')->name('home.lv');
    Route::get('/blog', [BlogController::class, 'indexLv'])->name('blog.lv');
    Route::get('/news/{slug}', [BlogController::class, 'showLv'])->name('news.show.lv');
    Route::view('/contact', 'template.lv.contact')->name('contact.lv');
    Route::post('/contact', [ContactController::class, 'sendLv'])->name('contact.lv.post');
    Route::get('/services', [ServiceController::class, 'indexLv'])->name('services.lv');
    Route::get('/services/{slug}', [ServiceController::class, 'showLv'])->name('services.show.lv');
    Route::view('/development', 'template.lv.development')->name('development.lv');
});

//angļu val
Route::prefix('en')->group(function () {
    Route::view('/', 'template.en.home-en')->name('home.en');
    Route::get('/blog', [BlogController::class, 'indexEn'])->name('blog.en');
    Route::get('/news/{slug}', [BlogController::class, 'showEn'])->name('news.show.en');
    Route::view('/contact', 'template.en.contact-en')->name('contact.en');
    Route::post('/contact', [ContactController::class, 'sendEn'])->name('contact.en.post');
    Route::get('/services', [ServiceController::class, 'indexEn'])->name('services.en');
    Route::get('/services/{slug}', [ServiceController::class, 'showEn'])->name('services.show.en');
    Route::view('/development', 'template.en.development-en')->name('development.en');
});

// Admins
Route::prefix('mz-admin')->group(function () {
    Route::get('/', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login.page');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    Route::middleware('admin.auth')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        
        // News 
        Route::get('/news', [NewsController::class, 'index'])->name('admin.news.index');
        Route::get('/news/create', [NewsController::class, 'create'])->name('admin.news.create');
        Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
        Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
        Route::put('/news/{news}', [NewsController::class, 'update'])->name('admin.news.update');
        Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
        
        // Services 
        Route::get('/services', [AdminServiceController::class, 'index'])->name('admin.services.index');
        Route::get('/services/create', [AdminServiceController::class, 'create'])->name('admin.services.create');
        Route::post('/services', [AdminServiceController::class, 'store'])->name('admin.services.store');
        Route::get('/services/{service}/edit', [AdminServiceController::class, 'edit'])->name('admin.services.edit');
        Route::put('/services/{service}', [AdminServiceController::class, 'update'])->name('admin.services.update');
        Route::delete('/services/{service}', [AdminServiceController::class, 'destroy'])->name('admin.services.destroy');
    });
});

// default uz latviešu
Route::redirect('/', '/lv');
