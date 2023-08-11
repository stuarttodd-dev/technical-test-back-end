<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Turbine extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'farm_id',
        'lat',
        'lng',
        'created_at',
        'updated_at',
    ];

    public function components(): HasMany
    {
        return $this->hasMany(Component::class);
    }

    public function inspections(): HasMany
    {
        return $this->hasMany(Inspection::class);
    }

    public function farm(): BelongsTo
    {
        return $this->belongsTo(Farm::class);
    }

}
