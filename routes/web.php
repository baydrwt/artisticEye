<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DashboardBookingController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\MidtransController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('/dashboard/products', DashboardProductController::class)->except(['show', 'edit', 'update'])->middleware('admin');
    Route::get('/dashboard/products/{product:name}/edit', [DashboardProductController::class, 'edit'])->middleware('admin');
    Route::put('/dashboard/products/{product:id}', [DashboardProductController::class, 'update'])->middleware('admin');

    Route::get('/dashboard/booking-list', [DashboardBookingController::class, 'index'])->middleware('admin');
    Route::put('/dashboard/booking-list/{transaction:transaction_id}', [DashboardBookingController::class, 'updateStatus'])->name('approve.by.admin')->middleware('admin');
    Route::delete('/dashboard/booking-list/{transaction:transaction_id}', [DashboardBookingController::class, 'destroy'])->name('destroy')->middleware('admin');

    Route::resource('/dashboard/reviews', ReviewController::class)->except(['show', 'edit', 'update'])->middleware('customer');
    Route::get('/dashboard/reviews/{review:user_id}/edit', [ReviewController::class, 'edit'])->middleware('customer');
    Route::put('/dashboard/reviews/{review:id}', [ReviewController::class, 'update'])->middleware('customer');

    Route::resource('form-book', TransactionController::class)->except(['show', 'edit', 'update']);
    Route::get('form-book/confirmation', [TransactionController::class, 'show']);
    Route::get('form-book/confirmation/payment-{transactions:name}', [TransactionController::class, 'edit']);
    Route::post('/update-booking-status', [TransactionController::class, 'updateStatus']);
    Route::put('form-book/confirmation/payment-{transaction:transaction_id}', [TransactionController::class, 'update'])->name('upload.payment.proof');
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('login', [LoginController::class, 'create'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);

