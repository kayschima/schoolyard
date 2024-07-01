<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StammdatumRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'stammdaten_typ_id' => ['required', 'exists:stammdaten_typen'],
            'abkuerzung' => ['required'],
            'kurzname' => ['required'],
            'langname' => ['required'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
