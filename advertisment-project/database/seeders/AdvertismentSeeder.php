<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdvertismentModel;
use Illuminate\Support\Str;

class AdvertismentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdvertismentModel::create([
            'id' => Str::uuid(),
            'title' => Str::random(50),
            'description' => Str::random(100),
            'price' => Str::random(8)
        ]);
    }
}
