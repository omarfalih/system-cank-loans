<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\offerController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//  Route CheckOut 
Route::get('/check-out', [CheckOutController::class ,'index'])->name('checkout');
Route::post('/check-out', [CheckOutController::class ,'Pey'])->name('post.checkout');
Route::get('/check-cancel', [CheckOutController::class ,'cancel'])->name('cancel.checkout');
Route::get('/check-success', [CheckOutController::class ,'success'])->name('success.checkout');


Route::get('/offer', [offerController::class, 'index'])->name('offer');
Route::post('/offer', [offerController::class, 'save'])->name('post.offer');
Route::get('/offer/delete/{id}', [offerController::class, 'delete'])->name('delete.offer');