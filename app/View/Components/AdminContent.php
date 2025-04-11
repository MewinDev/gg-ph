<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminContent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if (auth()->check() && auth()->user()->hasRole('admin')) {
            return view('contents.admin');
        }

        return ''; // Return an empty string if the user is not an admin
    }
}
