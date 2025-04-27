<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CandidatesController extends Controller
{

    public function senatorialIndex() {

        $candidates = Candidate::where('position_id', '1')->get();

        return view('candidates.senatorials', ['candidates' => $candidates]);
    }


    public function localIndex() {

        $candidates = Candidate::where('position_id', '2')->get();

        return view('candidates.locals', ['candidates' => $candidates]);
    }

    public function partylistIndex() {
        return view('candidates.partylists');
    }

    /**
     * Display the specified resource.
     */
    public function show($type, Candidate $candidate)
    {
        $info = $candidate->position->electionType->type_name;
        

        return view('candidates.information', ['candidate' => $info]);
    }
}
