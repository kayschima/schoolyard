<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Stammdatum */ class StammdatumResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'abkuerzung' => $this->abkuerzung,
            'kurzname' => $this->kurzname,
            'langname' => $this->langname,

            'stammdaten_typ_id' => $this->stammdaten_typ_id,

            'stammdatenTyp' => new StammdatenTypResource($this->whenLoaded('stammdatenTyp')), //
        ];
    }
}
