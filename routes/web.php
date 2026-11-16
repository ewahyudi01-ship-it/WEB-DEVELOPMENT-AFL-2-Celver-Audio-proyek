<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\DashboardController;


Route::get('/', [HomepageController::class, 'view'])->name('home-route');
Route::get('/explore', [ExploreController::class, 'view']);
Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard-route');
Route::get('/dashboard/editpage', [DashboardController::class, 'viewEdit'])->name('editDashboard-route');


Route::get('/testing', [TestingController::class, 'index']);
Route::get('/testing/form', [TestingController::class, 'create']);
Route::post('/save-form', [TestingController::class, 'store'])->name('save-laptop');
Route::post('/delete-form', [TestingController::class, 'destroy'])->name('delete-laptop');
Route::get('/edit-form/{testing}', [TestingController::class, 'edit'])->name('edit-laptop');
Route::post('/update-form/{testing}', [TestingController::class, 'update'])->name('update-laptop'); 
