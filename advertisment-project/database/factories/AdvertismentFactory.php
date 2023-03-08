<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AdvertismentModel;

class AdvertismentModelFactory extends Factory
{

    protected $model = AdvertismentModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => Str::uuid(),
            'title' => fake()->name(),
            'description' => fake()->name()
            'price' => Str::random(8)
        ];
    }
}
