<?php

use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\ProfileController;
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
    // Profile Controller
    Route::prefix('profile')->controller(ProfileController::class)->name('profile.')->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::patch('/', 'update')->name('update');
        Route::delete('/', 'destroy')->name('destroy');
    });
    // Candidates Controllers
    Route::prefix('candidates')->controller(CandidatesController::class)->group(function () {
        Route::get('/senatorials', 'showSenatorials')->name('senatorials.index');
        Route::get('/locals', 'showLocals')->name('locals.index');
        Route::get('/partylists', 'showPartylists')->name('partylists.index');
    });
});


require __DIR__.'/auth.php';
