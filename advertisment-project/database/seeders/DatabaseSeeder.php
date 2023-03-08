<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AdvertismentModel::create([
            'id' => Str::uuid(),
            'title' => fake()->name(),
            'description' => fake()->name()
            'price' => Str::random(8)
        ]);
    }
}
