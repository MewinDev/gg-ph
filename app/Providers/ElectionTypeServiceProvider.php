<?php

namespace App\Providers;

use App\Models\ElectionType;
use Illuminate\Support\ServiceProvider;

class ElectionTypeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->share('electionTypes', ElectionType::pluck('type_name')->toArray());
    }
}
