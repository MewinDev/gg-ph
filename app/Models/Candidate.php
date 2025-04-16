<?php

namespace App\Models;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'can_ballot_number', 'can_picture', 'can_firstname', 'can_lastname', 'can_middlename', 'can_age', 'can_sex',
        'position_id', 'partylist_id','region_id','province_id', 'city_id', 'district_id'
    ];

    /**
     * Get the user that owns the Candidate
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class);
    }
    
}
