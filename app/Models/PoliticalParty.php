<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PoliticalParty extends Model
{
    use HasFactory;

    protected $fillable = ['pol_abbreviation', "pol_name"];

    /**
     * Get all of the comments for the PoliticalParty
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidate(): HasMany
    {
        return $this->hasMany(Candidate::class);
    }
}
