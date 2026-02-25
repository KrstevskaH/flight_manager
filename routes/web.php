<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AircraftController;

use Illuminate\Support\Facades\Route;



// Dashboard 
Route::get('/dashboard', [FlightController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Auth routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Flight CRUD for authenticated users
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('flights', FlightController::class);
});
Route::get('/api/airlines', [ApiController::class, 'getAirlines']);
Route::post('/flights/{flight}/reserve', [FlightController::class, 'reserve'])
    ->name('flights.reserve')
    ->middleware('auth');

// Aircaft Controller
Route::get('/aircraft/airbus', [AircraftController::class, 'airbus'])->name('aircraft.airbus');

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/aircraft', [AircraftController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('aircraft.index');

Route::get('/aircraft/boeing', [AircraftController::class, 'boeing'])
    ->middleware(['auth', 'verified'])
    ->name('aircraft.boeing');

    Route::get('/aircraft/concorde', [AircraftController::class, 'concorde'])
    ->middleware(['auth', 'verified'])
    ->name('aircraft.concorde');

    Route::post('/aircraft/compare', [AircraftController::class, 'compare'])
    ->middleware(['auth', 'verified'])
    ->name('aircraft.compare');
    Route::get('/aircraft/compare', [AircraftController::class, 'showCompareForm'])
    ->middleware(['auth', 'verified'])
    ->name('aircraft.compare.form');

require __DIR__.'/auth.php';
