<?php

namespace Database\Factories;

use App\Models\PersonenTyp;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PersonenTypFactory extends Factory
{
    protected $model = PersonenTyp::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
        ];
    }
}
