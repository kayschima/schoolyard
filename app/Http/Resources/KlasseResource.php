<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Klasse */ class KlasseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,

            'klassenstufe_id' => $this->klassenstufe_id,
            'schulform_id' => $this->schulform_id,

            'klassenstufe' => new StammdatumResource($this->whenLoaded('klassenstufe')),
            'schulform' => new StammdatumResource($this->whenLoaded('schulform')), //
        ];
    }
}
