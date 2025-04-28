<?php 

namespace App\Services;

use App\Models\Candidate;
use App\Models\ElectionType;

class CandidateService
{
    public function getCandidateByType(string $type)
    {
        $electionType = ElectionType::where('type_name', $type)->first();

        if (!$electionType) {
            return null;
        }

        $candidates = Candidate::with(['position.electionType'])
            ->whereHas('position.electionType', fn($query) => $query->where('type_name', $type))
            ->get();

        return $candidates;
    }

    public function getCandidateById(string $electionType, string $positionName, $candidateId) {
        
        $candidate = Candidate::with('position.electionType')
            ->whereHas('position.electionType', fn($query) => $query->where('type_name', $electionType))
            ->findOrfail($candidateId);

            return $candidate;
    }
}

