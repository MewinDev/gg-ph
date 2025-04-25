<?php

namespace App\Models;

use App\Models\Barangay;
use App\Models\PartyList;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'can_ballot_number', 'can_picture', 'can_firstname', 'can_lastname', 'can_middlename', 'can_nickname', 'can_sex',
        'position_id', 'partylist_id','barangay_id'
    ];

    /**
     * Get the position that owns the Candidate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
    
    /**
     * Get the user that owns the Candidate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partylist(): BelongsTo
    {
        return $this->belongsTo(PartyList::class);
    }

    /**
     * Get the barangay that owns the Candidate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barangay(): BelongsTo
    {
        return $this->belongsTo(Barangay::class);
    }
    
}
