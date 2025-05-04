<?php

namespace App\Services;
use App\Models\Position;

class PositionService
{
    public function getAllPositions() {
        return Position::all();
    }

    public function getPositionById($id) {
        return Position::findOrFail($id);
    }

    public function getPositionCode($codeName) {
        return Position::where('position_code', $codeName)->first();
    }
}
