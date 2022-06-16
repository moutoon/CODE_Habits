<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(20),
            'body' => $this->faker->realText(100),
            'user_id' => $this->faker->numberBetween(1, 10),
            'start_day' => $this->faker->dateTimeBetween('-20days', '0days')->format('Y-m-d'),
            'end_day' => $this->faker->dateTimeBetween('-10days', '0days')->format('Y-m-d'),
            'today_time' => $this->faker->numberBetween(1, 12),
            'total_time' => $this->faker->numberBetween(1, 100),
            'total_days' => $this->faker->numberBetween(1, 100),
            'running_days' => $this->faker->numberBetween(1, 100),
            'updated_at' => $this->faker->dateTimeBetween('-10days', '0days')->format('Y-m-d'),
        ];
    }
}
