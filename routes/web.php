<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\AboutController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\AccountController;



// Route::get('/', function () {
//     return view('');
// });

// Frontend Routes
Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'about'])->name('website.layout');
Route::get('/contact',[ContactController::class, 'index']);
Route::get('/service',[ServicesController::class, 'index']);


Route::get('/all-accounts', [AccountController::class, 'viewAllAccounts'])->name('view.all.accounts');
Route::get('/current-account', [AccountController::class, 'currentAccount'])->name('current.account');
Route::get('/saving-profit', [AccountController::class, 'SavingAccountwithprofit'])->name('saving.profit');
Route::get('/saving-account', [AccountController::class, 'SavingAccount'])->name('saving.account');
Route::get('/albaraka-distinguish-account', [AccountController::class, 'albaraka_distinguish'])->name('albaraka.distinguish');

// Route::get('/view-all-accounts',[AccountController::class,' viewAllAccounts'])->name('view-all-account');


// Route::get('/current-account', [AccountController::class, 'currentAccount'])->name('current.account');


// Admin Routes
Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard');

// Auth Routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('auth.login');
