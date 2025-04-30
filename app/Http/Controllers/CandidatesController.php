<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\ElectionType;
use App\Services\CandidateService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;


class CandidatesController extends Controller
{
    protected $candidateService;

    public function __construct(CandidateService $candidateService) {
        $this->candidateService = $candidateService;
    }

    /**
     * Display all candidates.
     */

    public function index($type) {
        
        $candidates = $this->candidateService->getCandidateByType($type);
        $groupedCandidates = $candidates->groupBy('position.pos_code');

        if (is_null($candidates)) {
            abort(404);
        }

        $firstCandidate = $candidates
            ->first();

        [$positionName, $electionTypeName] = $this
            ->extractNames($firstCandidate, $type);

        return view('candidates.index', compact('groupedCandidates', 'positionName', 'electionTypeName'));
    }

    /**
     * Display the selected candidate.
     */
    public function show($electionTypeName, $positionName, $candidateId) {
        
        $selectedCandidate = $this
            ->candidateService
            ->getCandidateById($electionTypeName, $positionName, $candidateId);

        [$positionName, $electionTypeName] = $this->extractNames($selectedCandidate, $electionTypeName);

        return view('candidates.show', compact('selectedCandidate', 'positionName', 'electionTypeName'));
    }

    /**
     * Extract position and election type names safely.
     */
    public function extractNames($candidate, $defaultType) {
        
        $positionName = $candidate
            ->position
            ->pos_code ?? 'Unknown Position';

        $electionTypeName = $candidate
            ->position
            ->electionType
            ->type_name ?? ucfirst($defaultType);

        return [$positionName, $electionTypeName];
    }

}
