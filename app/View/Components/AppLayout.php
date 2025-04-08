<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{

    public string $title;

    public function __construct(string $title = 'GG PH') {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represents the component.
     */

    public function render(): View {
        return view('layouts.app', ['title' => $this->title]);
    }
}
