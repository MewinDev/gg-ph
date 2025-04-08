<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function showSenatorials() {
        return view('candidates.senatorials');
    }

    public function showLocals() {
        return view('candidates.locals');
    }

    public function showPartylists() {
        return view('candidates.partylists');
    }
}
