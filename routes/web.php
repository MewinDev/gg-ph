<?php

use App\Http\Controllers\AdminCandidatesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Models\ElectionType;



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

Route::view('/', 'welcome')->name('welcome');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Profile Controller
Route::prefix('profile')->controller(ProfileController::class)->name('profile.')->group(function () {
    Route::get('/', 'edit')->name('edit');
    Route::patch('/', 'update')->name('update');
    Route::delete('/', 'destroy')->name('destroy');
});

Route::middleware('auth')->group(function () {
    // Candidates Controllers
    Route::prefix('admin')->controller(AdminCandidatesController::class)->name('admin.')->group(function () {
        Route::get('/dashboard', 'index')->name('index');
    });
});

require __DIR__.'/auth.php';
require __DIR__.'/candidates.php';
require __DIR__.'/admin.php';
