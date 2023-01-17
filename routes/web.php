<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TravelLogController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Travel Logs Routes
    // Route::get('/travel', [TravelLogController::class, 'index'])->name('travel.index');
    // Route::get('/travel/create', [TravelLogController::class, 'create'])->name('travel.create');
    // Route::post('/travel/create', [TravelLogController::class, 'store'])->name('travel.store');
    // Route::get('/travel/{id}', [TravelLogController::class, 'show'])->name('travel.show');
    // Route::get('/travel/{id}/edit', [TravelLogController::class, 'edit'])->name('travel.edit');
    // Route::put('/travel/{id}/edit', [TravelLogController::class, 'update'])->name('travel.update');
    // Route::delete('/travel/{id}', [TravelLogController::class, 'destroy'])->name('travel.destroy');

    Route::resource('travel', TravelLogController::class);
});

require __DIR__.'/auth.php';
