<?php

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
    return view('index', ['title' => 'Home']);
})->name('index');



Route::get('login', [UserController::class, 'login'])->name('login');

Route::get('register', [UserController::class, 'register'])->name('register');

Route::post('register', [UserController::class, 'register_action'])->name('register.action');

Route::post('login', [UserController::class, 'login_action'])->name('login.action');

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('prevent-back-history')->middleware('auth');

Route::get('bookAppointment', [UserController::class, 'bookAppointment'])->name('bookAppointment')->middleware('prevent-back-history')->middleware('auth');

Route::get('viewAppointment', [UserController::class, 'viewAppointment'])->name('viewAppointment')->middleware('prevent-back-history')->middleware('auth');

Route::get('medicalHistory', [UserController::class, 'medicalHistory'])->name('medicalHistory')->middleware('prevent-back-history')->middleware('auth');

Route::get('profile', [UserController::class, 'profile'])->name('profile')->middleware('prevent-back-history')->middleware('auth');