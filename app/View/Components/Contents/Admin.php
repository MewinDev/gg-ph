<?php

namespace App\View\Components\Contents;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Admin extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }
    public function shouldRender(): bool
    {
        return auth()->check() && auth()->user()->hasRole('admin');
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contents.admin');
    }
}
