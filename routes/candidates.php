<?php

use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\SenatorialCandidatesController;
use Illuminate\Support\Facades\Route;

// Candidates Controllers
Route::prefix('candidates')->group(function () {
  Route::controller(CandidatesController::class)->group(function () {
      Route::get('/senatorials', 'senatorialIndex')->name('senatorials.index');
      Route::get('/locals', 'localIndex')->name('locals.index');
      Route::get('/partylists', 'partylistIndex')->name('partylists.index');

      Route::get('/information/{type}/{candidate}', 'show')->name('candidate.show');
  });
});
