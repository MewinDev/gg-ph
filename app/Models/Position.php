<?php

namespace App\Models;

use App\Models\Candidate;
use App\Models\ElectionType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    use HasFactory;
    
    protected $fillable = ['pos_name', 'election_type_id'];

    /**
     * Get all of the candidate for the Position
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidate(): HasMany
    {
        return $this->hasMany(Candidate::class);
    }

    /**
     * Get the types that owns the Position
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function types(): BelongsTo
    {
        return $this->belongsTo(ElectionType::class);
    }
}
