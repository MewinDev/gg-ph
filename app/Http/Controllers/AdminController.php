<?php

namespace App\Http\Controllers;

use App\Models\Position;
use Illuminate\Http\Request;
use App\Services\ElectionTypeService;

class AdminController extends Controller
{
    protected $electionTypeService;

    public function __construct(ElectionTypeService $electionTypeService)
    {
        $this->middleware('role:admin');
        $this->electionTypeService = $electionTypeService;
    }

    public function create()

    {
        $electionTypes = $this->electionTypeService->getAllElectionType();
        $position = Position::with('electionType')->get();
        $grouped = $position->groupBy(function ($query) {
            return $query->electionType->type_name;
        });
        return view('admin.candidates.create', compact('grouped'));
    }
    public function store(Request $request)
    {
        // Validate and store the data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        return redirect()->route('admin.candidates.create')->with('success', 'Admin created successfully!');
    }
}
