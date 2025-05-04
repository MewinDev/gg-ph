<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->middleware(['role:admin'])->controller(AdminController::class)->group(function () {
    $sections = [
        'candidates',
        'positions',
        'election-types',
        'campaign-teams'
    ];

    foreach ($sections as $section) {
        Route::prefix($section)->name($section . '.')->group(function () {
            Route::get('/create', 'create')->name('create');
            Route::get('/', 'store')->name('store');
        });
    }
});
