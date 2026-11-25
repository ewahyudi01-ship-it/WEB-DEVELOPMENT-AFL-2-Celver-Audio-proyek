<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BannerController;



// user biasa
Route::get('/', [HomepageController::class, 'view'])->name('home-route');
Route::get('/explore', [ExploreController::class, 'view'])->name('about-route');
Route::get('/contact', [ContactController::class, 'view'])->name('contact-route');
Route::post('/contact', [MessageController::class, 'store'])->name('submit-message');

// user admin saja (view dashboard)
Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard-route');
Route::get('/dashboard/editpage', [DashboardController::class, 'viewEditContent'])->name('editDashboard-route');
Route::get('/dashboard/view/Notification', [DashboardController::class, 'showNotification'])->name('notification-route');
Route::post('/dashboard/view/Notification/delete-form/{message}', [MessageController::class, 'destroy'])->name('delete-message');

// user admin (CRUD-data mostly)
//formAchivement
Route::get('/dashboard/view/list-layanan/', [LayananController::class, 'view'])->name('list-layanan-route');


//formBanner
Route::get('/dashboard/edit/Bannerpage', [BannerController::class, 'view'])->name('edit-Banner-route');

//formContact

//formLayanan
// Route::get('/dashboard/view/list-layanan/', [LayananController::class, 'view'])->name('list-layanan-route');
Route::get('/dashboard/view/list-layanan', [LayananController::class, 'view'])->name('list-layanan');
Route::get('/dashboard/view/create-layanan', [LayananController::class, 'create'])->name('create-layanan');
Route::post('/dashboard/view/store-layanan', [LayananController::class, 'store'])->name('store-layanan');
Route::get('/dashboard/view/edit-layanan/{layanan}', [LayananController::class, 'edit'])->name('edit-layanan');
Route::post('/dashboard/view/update-layanan/{layanan}', [LayananController::class, 'update'])->name('update-layanan');
Route::post('/dashboard/view/delete-layanan/{layanan}', [LayananController::class, 'destroy'])->name('delete-layanan');

//formTesting (crud latihan di kelas)
Route::get('/testing', [TestingController::class, 'index']);
Route::get('/testing/form', [TestingController::class, 'create']);
Route::post('/save-form', [TestingController::class, 'store'])->name('save-laptop');
Route::post('/delete-form', [TestingController::class, 'destroy'])->name('delete-laptop');
Route::get('/edit-form/{testing}', [TestingController::class, 'edit'])->name('edit-laptop');
Route::post('/update-form/{testing}', [TestingController::class, 'update'])->name('update-laptop'); 
