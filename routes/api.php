<?php

use App\Http\Controllers\Api\ReservationStudio\RSController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(static function(): void {
    Route::get('reservation_studio', RSController::class)->name('reservation_studio'); // Our Api Route that returns the studio reservations to our calendar
});
