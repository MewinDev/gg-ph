<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */

    public array $list;

    public function __construct() {
        $this->list = [
            'Add Candidates' => 'admin.candidates.create',
            'Add Position' => 'admin.positions.create',
            'Add Type of Election' => 'admin.election-types.create',
            'Add Campaign Team' => 'admin.campaign-teams.create',
        ];
    }

    public function render(): View
    {
        return view('layouts.app', ['list' => $this->list]);
    }
}
