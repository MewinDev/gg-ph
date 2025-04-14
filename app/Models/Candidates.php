<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalCandidates extends Model
{
    use HasFactory;

    protected $fillable = [
        'can_ballot_number', 'can_picture', 'can_firstname', 'can_lastname', 'can_middlename', 'can_age', 'can_sex',
        'position_id', 'partylist_id','region_id','province_id', 'city_id', 'district_id'
    ];
}
