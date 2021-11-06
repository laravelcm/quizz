<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => array_rand(['radio','checkbox']),
            'correct_answers' => "{}",
            'item_id' => $attributes['item_id'] ?? Item::factory(),
        ];
    }
}
