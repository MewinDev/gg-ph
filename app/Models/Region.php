<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['reg_name'];

    /**
     * Get all of the city for the Region
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function city(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
