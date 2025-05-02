<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ElectionType;
use App\Services\CandidateService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(CandidateService $candidateService) {
        $this->candidateService = $candidateService;
    }

    public function index() {
        $candidatesTotal = $this->candidateService->getCandidateTotalByType();
        return view('dashboard', ['candidatesTotal' => $candidatesTotal]);
    }
}
