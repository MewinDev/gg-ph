<?php  

use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\SenatorialCandidatesController;
use Illuminate\Support\Facades\Route;

// Candidates Controllers
Route::prefix('candidates')->group(function () {
  Route::controller(CandidatesController::class)->group(function () {
      Route::get('/senatorials', 'showSenatorials')->name('senatorials.index');
      Route::get('/locals', 'showLocals')->name('locals.index');
      Route::get('/partylists', 'showPartylists')->name('partylists.index');
  });

  Route::controller(SenatorialCandidatesController::class)->group(function () {
      Route::get('/senatorials/{id}', 'show')->name('senatorials.show');
  });
});