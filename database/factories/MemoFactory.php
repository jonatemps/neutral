<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Memo>
 */
class MemoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'candidate_id' => $this->faker->unique()->numberBetween(1, 200),
            'content' => $this->faker->words($nb = 8, $asText = false),
            'lnk_video' => 'https://www.youtube.com/embed/tgbNymZ7vqY'
        ];
    }
}
