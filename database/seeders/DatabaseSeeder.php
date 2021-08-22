<?php

namespace Database\Seeders;

use App\Models\Idea;
use App\Models\Category;
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
        Category::factory(4)->create();
        Idea::factory(30)->create();
    }
}
