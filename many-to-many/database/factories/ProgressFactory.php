<?php

namespace Database\Factories;

use App\Models\Progress;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgressFactory extends Factory
{
    protected $model = Progress::class;

    public function definition()
    {
        return [
            'completion_percentage' => $this->faker->numberBetween(0, 100),
        ];
    }
}

