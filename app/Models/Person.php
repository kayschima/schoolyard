<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Person extends Model
{
    use HasFactory;

    protected $table = 'personen';

    protected $fillable = [
        'personen_typ_id',
        'vorname',
        'nachname',
        'geburtstag',
        'email',
        'telefonnummer',
        'telefonnummer_mobil',
    ];

    public function personenTyp(): BelongsTo
    {
        return $this->belongsTo(PersonenTyp::class);
    }

    protected function casts()
    {
        return [
            'geburtstag' => 'date',
        ];
    }
}
