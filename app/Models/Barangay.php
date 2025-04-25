<?php

namespace App\Models;

use App\Models\Candidate;
use App\Models\District;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barangay extends Model
{
    use HasFactory;

    protected $fillable = ['bar_name', 'city_id', 'district_id'];

    /**
     * Get all candidates for the Barangay.
     */
    public function candidates(): HasMany
    {
        return $this->hasMany(Candidate::class);
    }

    /**
     * Get the district that owns the Barangay.
     */
    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }
}
