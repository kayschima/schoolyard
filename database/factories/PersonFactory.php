<?php

namespace Database\Factories;

use App\Models\Person;
use App\Models\PersonenTyp;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PersonFactory extends Factory
{
    protected $model = Person::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'vorname' => $this->faker->word(),
            'nachname' => $this->faker->word(),
            'geburtstag' => Carbon::now(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefonnummer' => $this->faker->word(),
            'telefonnummer_mobil' => $this->faker->word(),

            'personen_typ_id' => PersonenTyp::factory(),
        ];
    }
}
