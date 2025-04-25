<?php

namespace App\Models;

use App\Models\Barangay;
use App\Models\Province;
use App\Models\Region;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['city_name', 'region_id', 'province_id'];

    /**
     * Get all of the barangay for the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barangay(): HasMany
    {
        return $this->hasMany(Barangay::class);
    }

    /**
     * Get the region that owns the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
    
    /**
     * Get the province that owns the City
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}
