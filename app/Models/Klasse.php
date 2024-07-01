<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Klasse extends Model
{
    use HasFactory;

    protected $table = 'klassen';

    protected $fillable = [
        'klassenstufe_id',
        'schulform_id',
    ];

    public function klassenstufe(): BelongsTo
    {
        return $this->belongsTo(Stammdatum::class, 'klassenstufe_id');
    }

    public function schulform(): BelongsTo
    {
        return $this->belongsTo(Stammdatum::class, 'schulform_id');
    }
}
