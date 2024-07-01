<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'personen_typ_id' => ['required', 'exists:personen_typen'],
            'vorname' => ['required'],
            'nachname' => ['required'],
            'geburtstag' => ['required', 'date'],
            'email' => ['required', 'email', 'max:254'],
            'telefonnummer' => ['required'],
            'telefonnummer_mobil' => ['required'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
