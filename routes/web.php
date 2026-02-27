<?php

use Illuminate\Support\Facades\Route;

// Latviski routes
Route::prefix('lv')->group(function () {
    Route::view('/', 'template.lv.home')->name('home.lv');
    Route::view('/blog', 'template.lv.blog')->name('blog.lv');
    Route::view('/contact', 'template.lv.contact')->name('contact.lv');
    Route::view('/services', 'template.lv.services')->name('services.lv');
    Route::view('/development', 'template.lv.development')->name('development.lv');
    Route::view('/services/web-development', 'template.lv.service-web-development')->name('service-web-development.lv');
    Route::view('/services/digital-marketing', 'template.lv.service-digital-marketing')->name('service-digital-marketing.lv');
    Route::view('/services/saas', 'template.lv.service-saas')->name('service-saas.lv');
    Route::view('/services/apps', 'template.lv.service-apps')->name('service-apps.lv');
    Route::view('/services/seo', 'template.lv.service-seo')->name('service-seo.lv');
    Route::view('/services/data-analysis', 'template.lv.service-data-analysis')->name('service-data-analysis.lv');
});

//angļu val
Route::prefix('en')->group(function () {
    Route::view('/', 'template.en.home-en')->name('home.en');
    Route::view('/blog', 'template.en.blog-en')->name('blog.en');
    Route::view('/contact', 'template.en.contact-en')->name('contact.en');
    Route::view('/services', 'template.en.services-en')->name('services.en');
    Route::view('/development', 'template.en.development-en')->name('development.en');
    Route::view('/services/web-development', 'template.en.service-web-development')->name('service-web-development.en');
    Route::view('/services/digital-marketing', 'template.en.service-digital-marketing')->name('service-digital-marketing.en');
    Route::view('/services/saas', 'template.en.service-saas')->name('service-saas.en');
    Route::view('/services/apps', 'template.en.service-apps')->name('service-apps.en');
    Route::view('/services/seo', 'template.en.service-seo')->name('service-seo.en');
    Route::view('/services/data-analysis', 'template.en.service-data-analysis')->name('service-data-analysis.en');
});

// default uz latviešu
Route::redirect('/', '/lv');
