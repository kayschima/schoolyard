<?php

namespace Database\Factories;

use App\Models\Klasse;
use App\Models\Stammdatum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class KlasseFactory extends Factory
{
    protected $model = Klasse::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),

            'klassenstufe_id' => Stammdatum::factory(),
            'schulform_id' => Stammdatum::factory(),
        ];
    }
}
