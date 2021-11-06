<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Choice;
use App\Models\Item;
use App\Models\Question;
use App\Models\Quiz;
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
        // \App\Models\User::factory(10)->create();
        Quiz::factory(10)->create();
        Category::factory(4)->create();
        Item::factory(9)->create();
        Question::factory(50)->create();
        Choice::factory(4)->create();

    }
}
