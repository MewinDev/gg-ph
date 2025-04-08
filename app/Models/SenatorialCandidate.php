<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SenatorialCandidates extends Model
{
    use HasFactory;

    protected $fillable = [
        'sen_picture', 'sen_firstname', 'sen_lastname', 'sen_middlename', 'sen_age', 'sen_sex', 
        'partylist_id'
    ];
}
