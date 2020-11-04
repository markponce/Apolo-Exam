<?php

namespace Database\Factories;

use App\Models\Breakdown;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BreakdownFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Breakdown::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'values' => Str::random(5),
        ];
    }


}
