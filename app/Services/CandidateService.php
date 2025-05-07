<?php

namespace App\Services;

use App\Models\Candidate;
use App\Models\ElectionType;

class CandidateService
{
    protected $electionTypeService;

    public function __construct(ElectionTypeService $electionTypeService) {
        $this->electionTypeService = $electionTypeService;
    }

    public function getCandidateByType(string $type) {
        $electionType = $this->electionTypeService->getElectionByTypeName($type);

        if (!$electionType) {
            return null;
        }

        return Candidate::with(['position.electionType'])
            ->whereHas('position.electionType', fn($query) => $query->where('type_name', $type));

    }

    public function getCandidateTotalByType() {
        $candidates = Candidate::selectRaw('election_types.type_name, COUNT(candidates.id) as total')
            ->join('positions', 'candidates.position_id', '=', 'positions.id')
            ->join('election_types', 'positions.election_type_id', '=', 'election_types.id')
            ->groupBy('election_types.type_name')
            ->pluck('total', 'type_name');

            return $candidates;
    }

    public function getCandidateById(string $electionType, string $positionName, $candidateId) {

        $candidate = Candidate::with('position.electionType')
            ->whereHas('position.electionType', fn($query) => $query->where('type_name', $electionType))
            ->findOrfail($candidateId);

            return $candidate;
    }
}

