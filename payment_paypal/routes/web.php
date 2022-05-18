<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PapPalController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PapPalController::class, 'goPayment'])->name('payment.go');

Route::get('payment',[PapPalController::class,'payment'])->name('payment');
Route::get('cancel',[PapPalController::class,'cancel'])->name('payment.cancel');
Route::get('payment/success',[PapPalController::class,'success'])->name('payment.success');


