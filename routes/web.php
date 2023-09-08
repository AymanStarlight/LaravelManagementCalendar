<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationStudio;
use App\Http\Controllers\ReservationStudioController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Studios
    Route::get('/studios/{studio}', [ReservationStudioController::class, 'calendar'])->name('studios.calendar');
    Route::post('/studios/{studio}/reservation/create', [ReservationStudioController::class, 'store'])->name('reservation_studio.create');
    Route::get('/studios/{studio}/reservations/{reservation_studio}', [ReservationStudioController::class, 'info'])->name('reservation.info');
});

require __DIR__.'/auth.php';
