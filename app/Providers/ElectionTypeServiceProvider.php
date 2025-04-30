<?php

namespace App\Providers;

use App\Models\ElectionType;
use Illuminate\Support\Facades\Schema;
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
        if (Schema::hasTable('election_types')) {
            view()->share('electionTypes', ElectionType::pluck('type_name')->toArray());
        }
    }
}
