<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AircraftController;

use Illuminate\Support\Facades\Route;

Route::get('/aircraft/airbus', [AircraftController::class, 'airbus'])->name('aircraft.airbus');
// Default / главна страница -> редиректира на login
Route::get('/', function () {
    return redirect()->route('login');
});

// Dashboard -> покажува листа на летови, само за auth корисници
Route::get('/dashboard', [FlightController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Auth рутите за профил
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Flight CRUD рутите, само за логирани и верифицирани корисници
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('flights', FlightController::class);
});
Route::get('/api/airlines', [ApiController::class, 'getAirlines']);

// Breeze / Fortify auth рутите (login, register, forgot password...)

Route::get('/aircraft', [AircraftController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('aircraft.index');
require __DIR__.'/auth.php';
