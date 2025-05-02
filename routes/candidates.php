<?php

use App\Http\Controllers\CandidatesController;
use Illuminate\Support\Facades\Route;

// Candidates Controllers
Route::prefix('candidates/{type}')->name('candidates.')->controller(CandidatesController::class)->group(function () {

      Route::get('/', 'index')->name('index');
      Route::get('/{position}/{candidate}', 'show')->name('show');
});
  