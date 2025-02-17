<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('appointments', App\Http\Controllers\AppointmentController::class);
Route::resource('doctors', App\Http\Controllers\DoctorController::class);
Route::resource('notifications', App\Http\Controllers\NotificationController::class);

Route::resource('predictions', App\Http\Controllers\PredictionController::class);