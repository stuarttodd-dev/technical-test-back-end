<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inspection extends Model
{
    use HasFactory;

    protected $fillable = [
        'turbine_id',
        'inspected_at',
        'created_at',
        'updated_at',
    ];

    public function turbine(): BelongsTo
    {
        return $this->belongsTo(Turbine::class);
    }
}
