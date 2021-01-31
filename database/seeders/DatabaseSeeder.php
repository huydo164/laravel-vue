<?php

namespace Database\Seeders;

use App\Models\Blogs;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i = 0; $i < 3; $i++){
           Blogs::create([
                'title' => $faker->sentence,
                'des' => $faker->paragraph,
                'detail' => $faker->paragraph,
                'category' => $faker->numberBetween(1,7),
                'public' => $faker->numberBetween(0,1),
                'data_pubblic' => $faker->date,
                'thumbs' => $faker->paragraph,
            ]);
        }
    }
}
