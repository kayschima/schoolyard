<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StammdatenTyp extends Model
{
    use HasFactory;

    protected $table = 'stammdaten_typen';

    protected $fillable = [
        'name',
    ];
}
