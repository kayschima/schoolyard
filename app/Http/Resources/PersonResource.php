<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Person */ class PersonResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'vorname' => $this->vorname,
            'nachname' => $this->nachname,
            'geburtstag' => $this->geburtstag,
            'email' => $this->email,
            'telefonnummer' => $this->telefonnummer,
            'telefonnummer_mobil' => $this->telefonnummer_mobil,

            'personen_typ_id' => $this->personen_typ_id,

            'personenTyp' => new PersonenTypResource($this->whenLoaded('personenTyp')), //
        ];
    }
}
