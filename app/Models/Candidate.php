<?php

namespace App\Models;

use App\Models\Barangay;
use App\Models\PartyList;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Znck\Eloquent\Relations\BelongsToThrough;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'can_ballot_number', 'can_picture', 'can_firstname', 'can_lastname', 'can_middlename', 'can_nickname', 'can_sex',
        'position_id', 'partylist_id','barangay_id'
    ];

    /**
     * Get the position that owns the Candidate.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }

    /**
     * Get the party list that owns the Candidate.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function partylist(): BelongsTo
    {
        return $this->belongsTo(PartyList::class);
    }

    /**
     * Get the barangay that owns the Candidate.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function barangay(): BelongsToThrough
    {
        return $this->belongsToThrough(Barangay::class);
    }

    /**
     * Get the city that the barangay belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToThrough
     */
    public function city(): BelongsToThrough
    {
        return $this->belongsToThrough(City::class, Barangay::class);
    }

    /**
     * Get the province that the city belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToThrough
     */
    public function province(): BelongsToThrough
    {
        return $this->belongsToThrough(Province::class, [Barangay::class, City::class]);
    }

    /**
     * Get the region that the province belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToThrough
     */
    public function region(): BelongsToThrough
    {
        return $this->belongsToThrough(Region::class, [Barangay::class, City::class, Province::class]);
    }
}
