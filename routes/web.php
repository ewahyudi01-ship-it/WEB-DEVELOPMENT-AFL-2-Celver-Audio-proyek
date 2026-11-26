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
use App\Http\Controllers\AchivementController;
use App\Http\Controllers\AuthController;



// user biasa
Route::get('/', [HomepageController::class, 'view'])->name('home-route');
Route::get('/explore', [ExploreController::class, 'viewVenue'])->name('about-route');
Route::get('/contact', [ContactController::class, 'viewUser'])->name('contact-route');
Route::post('/contact', [MessageController::class, 'store'])->name('submit-message');



//user search
Route::get('/explore/search', [ExploreController::class, 'index'])->name('search-portfolio-route');



// login admin
Route::view('/login', 'Login.login')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1');
Route::post('/logout', [AuthController ::class, 'logout']);




// user admin (CRUD-data mostly)
Route::middleware ('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'view'])->name('dashboard-route');
    Route::get('/dashboard/editpage', [DashboardController::class, 'viewEditContent'])->name('editDashboard-route');
    Route::get('/dashboard/view/Notification', [DashboardController::class, 'showNotification'])->name('notification-route');
    Route::post('/dashboard/view/Notification/delete-form/{message}', [MessageController::class, 'destroy'])->name('delete-message');

//formAchivement
Route::get('/dashboard/view/list-achivement/', [AchivementController::class, 'view'])->name('list-achivement-route');
Route::get('/dashboard/new/achivement/', [AchivementController::class, 'create'])->name('new-achivement-route');
Route::post('/save-achivement', [AchivementController::class, 'store'])->name('save-achivement');
Route::post('/delete-achivement', [AchivementController::class, 'destroy'])->name('delete-achivement');
Route::get('/edit-achivement/{achivement}', [AchivementController::class, 'edit'])->name('edit-achivement');
Route::post('/update-achivement/{achivement}', [AchivementController::class, 'update'])->name('update-achivement');


//formBanner
Route::get('/dashboard/edit/Bannerpage', [BannerController::class, 'view'])->name('edit-Banner-route');



//formContact
Route::get('/dashboard/view/list-contact/', [ContactController::class, 'view'])->name('list-contact-route');
Route::get('/edit-contact/{contact}', [ContactController::class, 'edit'])->name('edit-contact');
Route::post('/update-contact/{contact}', [ContactController::class, 'update'])->name('update-contact');



//formLayanan
Route::get('/dashboard/view/list-layanan/', [LayananController::class, 'view'])->name('list-layanan-route');
Route::get('/dashboard/new/layanan/', [LayananController::class, 'create'])->name('new-layanan-route');
Route::post('/save-layanan', [LayananController::class, 'store'])->name('save-layanan');
Route::post('/delete-layanan/{layanan}', [LayananController::class, 'destroy'])->name('delete-layanan');
Route::get('/edit-layanan/{layanan}', [LayananController::class, 'edit'])->name('edit-layanan');
Route::post('/update-layanan/{layanan}', [LayananController::class, 'update'])->name('update-layanan');


//formPortfolio
Route::get('/dashboard/view/list-portfolio/', [ExploreController::class, 'view'])->name('list-portfolio-route');
Route::get('/dashboard/new/portfolio/', [ExploreController::class, 'create'])->name('new-portfolio-route');
Route::post('/save-portfolio', [ExploreController::class, 'store'])->name('save-portfolio');
Route::post('/delete-portfolio/{portfolio}', [ExploreController::class, 'destroy'])->name('delete-portfolio');
Route::get('/edit-portfolio/{portfolio}', [ExploreController::class, 'edit'])->name('edit-portfolio');
Route::post('/update-portfolio/{portfolio}', [ExploreController::class, 'update'])->name('update-portfolio');
});

//formTesting (crud latihan di kelas)
Route::get('/testing', [TestingController::class, 'index']);
Route::get('/testing/form', [TestingController::class, 'create']);
Route::post('/save-form', [TestingController::class, 'store'])->name('save-laptop');
Route::post('/delete-form', [TestingController::class, 'destroy'])->name('delete-laptop');
Route::get('/edit-form/{testing}', [TestingController::class, 'edit'])->name('edit-laptop');
Route::post('/update-form/{testing}', [TestingController::class, 'update'])->name('update-laptop'); 
