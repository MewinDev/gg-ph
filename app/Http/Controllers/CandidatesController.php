<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CandidatesController extends Controller
{

    public function showSenatorials() {

        $candidates = Candidate::where('position_id', '1')->get();
        
        return view('candidates.senatorials', ['candidates' => $candidates]);
    }

    public function showLocals() {
        return view('candidates.locals');
    }

    public function showPartylists() {
        return view('candidates.partylists');
    }
}
