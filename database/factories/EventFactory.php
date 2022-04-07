<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department_id' => $this->faker->randomElement(Department::pluck('id')),
            'title' => ucfirst($this->faker->word(4, true)),
            'body' => ucfirst($this->faker->sentence(4, true)),
            'note' => ucfirst($this->faker->sentence(1, true)),
            'date' => now(),
        ];
    }
}
