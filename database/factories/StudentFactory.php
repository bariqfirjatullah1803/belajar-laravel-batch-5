<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\School;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $schools = School::all();
        $schoolIds = $schools->pluck('id')->toArray();
        $schoolId = array_rand($schoolIds, 1);

        $schoolId = ($schoolId == 0) ? 1 : $schoolId;

        return [
            'name' => fake()->name(),
            'address' => fake()->address(),
            'school_id' => $schoolId,
        ];
    }
}
