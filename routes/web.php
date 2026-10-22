<?php

use App\Http\Controllers\PersonalSiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PersonalSiteController::class, 'news'])->name('news');
Route::get('/cv', [PersonalSiteController::class, 'cv'])->name('cv');
Route::get('/portfolio', [PersonalSiteController::class, 'portfolio'])->name('portfolio');
Route::get('/admin/news', [PersonalSiteController::class, 'admin'])->name('admin.news');
Route::get('/subscribe', [PersonalSiteController::class, 'subscribe'])->name('subscribe');
Route::post('/subscribe', [PersonalSiteController::class, 'storeSubscription'])->name('subscribe.store');
