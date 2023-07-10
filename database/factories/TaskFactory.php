<?php

namespace Database\Factories;

use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(64),
            'description' => fake()->optional()->realText,
            'deadline_at' => fake()->optional()
                ->dateTimeBetween('-7 days', '+14 days')
                ?->format('Y-m-d'),
            'status' => fake()->randomElement(TaskStatus::cases())
        ];
    }

    public function process(): Factory
    {
        return $this->state(function () {
            return [
                'status' => TaskStatus::PROCESS->value,
            ];
        });
    }

    public function done(): Factory
    {
        return $this->state(function () {
            return [
                'status' => TaskStatus::DONE->value,
            ];
        });
    }
}
