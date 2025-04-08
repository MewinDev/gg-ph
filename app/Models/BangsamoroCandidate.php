<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BangsamoroCandidates extends Model
{
    use HasFactory;

    protected $fillable = [
        'bang_picture', 'bang_firstname', 'bang_lastname', 'bang_middlename', 'bang_age', 'bang_sex', 
        'bangsamoro_parliamentary_position_id', 'partylist_id'
    ];
}
