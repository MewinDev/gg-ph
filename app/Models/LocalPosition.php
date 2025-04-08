<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalPosition extends Model
{
    use HasFactory;
    
    protected $fillable = ['locpos_name'];
}
