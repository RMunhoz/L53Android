<?php

use Illuminate\Database\Seeder;
use SON\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 50)->create();
    }
}
