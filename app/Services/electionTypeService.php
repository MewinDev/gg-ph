<?php


namespace App\Services;
use App\Models\ElectionType;

class ElectionTypeService
{
    public function getAllElectionType() {
        return ElectionType::all();
    }

    public function getElectionTypeById($id) {
        return ElectionType::findOrFail($id);
    }

    public function getElectionByTypeName($typeName) {
        return ElectionType::where('type_name', $typeName)->first();
    }
}
