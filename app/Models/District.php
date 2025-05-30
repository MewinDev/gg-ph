<?php

namespace App\Models;

use App\Models\Barangay;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['dis_name'];

    /**
     * Get all of the barangay for the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barangay(): HasMany
    {
        return $this->hasMany(Barangay::class);
    }
}
