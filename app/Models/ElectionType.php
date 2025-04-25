<?php

namespace App\Models;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ElectionType extends Model
{
    use HasFactory;

    protected $fillable = ['type_name'];

    /**
     * Get all of the comments for the ElectionType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function position(): HasMany
    {
        return $this->hasMany(Position::class);
    }
}
