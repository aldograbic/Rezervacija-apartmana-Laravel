<?php

use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\ApartmentDescriptionController;
use App\Http\Controllers\ApartmentsPageController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Auth\RegisterController as AuthRegisterController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');    
});

#Rute za navigaciju
Route::get('/registration', [AuthRegisterController::class, 'index'])->name('registration');
Route::get('/login', [AuthLoginController::class, 'index'])->name('login');
Route::get('/apartments-page', [ApartmentsPageController::class, 'apartments'])->name('apartments-page');
Route::get('apartment-description/{id}', [ApartmentDescriptionController::class, 'show'])->name('apartment-show');
Route::get('reservation/{id}', [ReservationController::class, 'create'])->name('reservation');

#Rute za submit
Route::post('register', [AuthRegisterController::class, 'register'])->name('register');
Route::post('login', [AuthLoginController::class, 'login']);
Route::get('logout', [AuthLoginController::class, 'logout'])->name('logout');
Route::post('reservation', [ReservationController::class, 'store'])->name('reservation-store');

