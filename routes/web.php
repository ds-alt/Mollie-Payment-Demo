<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MollieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Mollie Payment
Route::get('mollie-payment-success',[MollieController::Class, 'paymentSuccess'])->name('mollie.payment.success');
Route::get('mollie-create-payment',[MollieController::Class,'createPayment'])->name('mollie.create.payment');
Route::get('create-mollie-subscription',[MollieController::Class,'createMollieSubscription'])->name('create.mollie.subscription');
