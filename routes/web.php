<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\offerController;
use App\Http\Controllers\MyHomeController;

use App\Http\Controllers\LoginUserController;



// admin 
// use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserOfferController;

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

Route::get('/', [MyHomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//  Route CheckOut 
Route::get('/check-out', [CheckOutController::class ,'index'])->name('checkout');
Route::post('/check-out', [CheckOutController::class ,'Pey'])->name('post.checkout');
Route::get('/check-cancel', [CheckOutController::class ,'cancel'])->name('cancel.checkout');
Route::get('/check-success', [CheckOutController::class ,'success'])->name('success.checkout');


Route::get('/login-users',[LoginUserController::class, 'index'])->name('login-users');
Route::get('/register-users',[LoginUserController::class, 'register'])->name('register-users');

Route::get('/users-offers/{id}', [MyHomeController::class , 'UsersOffers'])->name('users-offers');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    // Offer
    Route::get('/offer', [offerController::class, 'index'])->name('offer');
    Route::post('/offer', [offerController::class, 'save'])->name('post.offer');
    Route::get('/offer/delete/{id}', [offerController::class, 'delete'])->name('delete.offer');


    // users
    Route::get('/users', [UserController::class, 'index'])->name('admin.users');


    // users_offers
    Route::get('/users-offers', [UserOfferController::class, 'index'])->name('users.offers');
    Route::post('/users-offers', [UserOfferController::class, 'save'])->name('post.users.offers');
    Route::get('/users-offers/delete/{id}', [UserOfferController::class, 'delete'])->name('delete.users.offers');

});