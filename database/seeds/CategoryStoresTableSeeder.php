<?php

use App\Category;
use App\Category_Store;
use App\Store;
use Illuminate\Database\Seeder;

class CategoryStoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryStore = new Category_Store();
        $categoryStore->store()->attach(Store::where('name','Xiaomi'));
        $categoryStore->save();
    }
}
