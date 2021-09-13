<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Division extends Model
{
    use HasFactory;

    protected $table = 'divisions';
    protected $primaryKey = 'id_division';

    protected $fillable = [
        'name',
        'level',
        'collaborators',
        'ambassador'
    ];

    // Relationships
    public function upperDivision(): BelongsTo
    {
        return $this->belongsTo(Division::class, 'id_upper_division', 'id_division');
    }

    public function subdivision(): HasMany
    {
        return $this->hasMany(Division::class, 'id_upper_division', 'id_division');
    }
}