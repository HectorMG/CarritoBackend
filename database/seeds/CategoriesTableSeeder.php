<?php

use App\Category;
use App\Store;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Technology';
        $category->save();

        $category = new Category();
        $category->name = 'Moda';
        $category->save();

        $category = new Category();
        $category->name = 'Deportes';
        $category->save();

        $category = new Category();
        $category->name = 'Hogar';
        $category->save();
    }
}
