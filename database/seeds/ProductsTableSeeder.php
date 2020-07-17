<?php

use App\Category;
use App\Product;
use App\Store;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'name' => 'Xiaomi mi 9',
            'description' => 'The best cellphone of xiaomi maybe',
            'image_path' => 'https://csmobiles.com/12725-large_default/xiaomi-mi-9-4g-64gb-dual-sim-azul.jpg',
            'price' => 1350000,
            'store_id' => Store::where('name','Xiaomi')->first()->id,
            'category_id' => Category::where('name','Technology')->first()->id
        ]);
        $product->save();

        $product = Product::create([
            'name' => 'Samsung galaxy s11',
            'description' => 'The best cellphone of samsung store',
            'image_path' => 'https://los40es00.epimg.net/los40/imagenes/2019/11/30/tecnologia/1575113738_774861_1575113895_noticia_normal.jpg',
            'price' => 4350000,
            'store_id' => Store::where('name','Samsung')->first()->id,
            'category_id' => Category::where('name','Technology')->first()->id
        ]);
        $product->save();

        $product = Product::create([
            'name' => 'Iphone x',
            'description' => 'The best cellphone of apple store',
            'image_path' => 'https://images-na.ssl-images-amazon.com/images/I/41iWDmmZEVL._SL500_AC_SS350_.jpg',
            'price' => 4750000,
            'store_id' => Store::where('name','Apple')->first()->id,
            'category_id' => Category::where('name','Technology')->first()->id
        ]);
        $product->save();
    }
}
