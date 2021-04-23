<?php

namespace Database\Factories;

use App\Models\BrandCoordination;
use Illuminate\Database\Eloquent\Factories\Factory;
use Storage;

class BrandCoordinationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BrandCoordination::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => Storage::putFile('news', $this->faker->image()),
            'brand_id' => rand(1, 2),
        ];
    }
}
