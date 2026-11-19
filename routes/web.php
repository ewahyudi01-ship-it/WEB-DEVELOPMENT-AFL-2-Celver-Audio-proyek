<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomepageController::class, 'view'])->name('home-route');
Route::get('/explore', [ExploreController::class, 'view'])->name('about-route');
Route::get('/contact', [ContactController::class, 'view'])->name('contact-route');

Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard-route');
Route::get('/dashboard/editpage', [DashboardController::class, 'viewEditContent'])->name('editDashboard-route');
Route::get('/dashboard/editBannerpage', [DashboardController::class, 'viewEditBanner'])->name('editBanner-route');




Route::get('/testing', [TestingController::class, 'index']);
Route::get('/testing/form', [TestingController::class, 'create']);
Route::post('/save-form', [TestingController::class, 'store'])->name('save-laptop');
Route::post('/delete-form', [TestingController::class, 'destroy'])->name('delete-laptop');
Route::get('/edit-form/{testing}', [TestingController::class, 'edit'])->name('edit-laptop');
Route::post('/update-form/{testing}', [TestingController::class, 'update'])->name('update-laptop'); 
