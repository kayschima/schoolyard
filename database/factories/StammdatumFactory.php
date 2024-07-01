<?php

namespace Database\Factories;

use App\Models\StammdatenTyp;
use App\Models\Stammdatum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class StammdatumFactory extends Factory
{
    protected $model = Stammdatum::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'abkuerzung' => $this->faker->word(),
            'kurzname' => $this->faker->word(),
            'langname' => $this->faker->word(),

            'stammdaten_typ_id' => StammdatenTyp::factory(),
        ];
    }
}
