<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ContactinfoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ClientdashboardController;
use App\Http\Controllers\Auth\ClientLoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');



Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

// Login
Route::get('/login', [ClientLoginController::class, 'showLoginForm'])->name('client.login');
Route::post('/login', [ClientLoginController::class, 'login'])->name('client.login.submit');


// Registration
Route::post('/register', [ClientLoginController::class, 'register'])->name('client.register.submit');

Route::middleware(['auth'])->group(function () {
    Route::get('/clientdashboard', [ClientDashboardController::class, 'clientdashboard'])->name('client.dashboard');
    
});


Route::post('client/logout', [ClientLoginController::class, 'logout'])->name('client.logout');

Route::get('/admin/banner/create', [BannerController::class, 'create'])->name('admin.banner.create');
Route::post('/admin/banner', [BannerController::class, 'store'])->name('admin.banner.store');
Route::get('/admin/contact/create', [ContactinfoController::class, 'create'])->name('admin.contact.create');
Route::post('/admin/contact', [ContactinfoController::class, 'store'])->name('admin.contact_info.store');