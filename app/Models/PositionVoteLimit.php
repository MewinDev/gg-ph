<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PositionVoteLimit extends Model
{
    use HasFactory;

    protected $fillable = ['position', 'level', 'area', 'max_votes'];
}
