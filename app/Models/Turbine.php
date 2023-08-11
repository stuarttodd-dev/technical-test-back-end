<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Turbine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'farm_id',
        'lat',
        'lng',
        'created_at',
        'updated_at',
    ];

    public function farm(): BelongsTo
    {
        return $this->belongsTo(Farm::class);
    }

}
