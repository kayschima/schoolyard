<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KlasseRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'klassenstufe_id' => ['required', 'exists:stammdaten'],
            'schulform_id' => ['required', 'exists:stammdaten'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
