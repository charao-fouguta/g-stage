<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Storage;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'posted_date' => now(),
            'image' => Storage::putFile('news', $this->faker->image()),
            'title' => $this->faker->word,
            'content' => $this->faker->text,
            'visible' => rand(0, 1),
        ];
    }
}
