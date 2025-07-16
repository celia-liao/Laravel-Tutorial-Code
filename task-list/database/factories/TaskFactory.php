<?php

namespace Database\Factories;

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
            'title' => fake()->sentence(), // 一句隨機句子作為任務標題
            'description' => fake()->paragraph(), // 一段隨機文字作為任務描述
            'long_description' => fake()->paragraph(7, true), // 七句文字組成的段落字串作為詳細描述
            'completed' => fake()->boolean(), // 隨機 true/false，代表任務是否完成
          ];
    }
}
