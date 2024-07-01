<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stammdatum extends Model
{
    use HasFactory;

    protected $table = 'stammdaten';

    protected $fillable = [
        'stammdaten_typ_id',
        'abkuerzung',
        'kurzname',
        'langname',
    ];

    public function stammdatenTyp(): BelongsTo
    {
        return $this->belongsTo(StammdatenTyp::class);
    }
}
