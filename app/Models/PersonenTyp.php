<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonenTyp extends Model
{
    use HasFactory;

    protected $table = 'personen_typen';

    protected $fillable = [
        'name',
    ];
}
