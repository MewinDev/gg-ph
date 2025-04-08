<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalCandidates extends Model
{
    use HasFactory;

    protected $fillable = [
        'loc_picture', 'loc_firstname', 'loc_lastname', 'loc_middlename', 'loc_age', 'loc_sex', 
        'local_position_id', 'partylist_id','region_id','city_id', 'province_id'
    ];
}
