<?php

namespace App\Models;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    use HasFactory;
    
    protected $fillable = ['pos_name'];

    /**
     * Get all of the comments for the Position
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidate(): HasMany
    {
        return $this->hasMany(Candidate::class);
    }
}
