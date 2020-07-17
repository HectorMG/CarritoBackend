<?php

use App\Category;
use App\Store;
use App\User;
use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = Store::create([
            'name' => 'Xiaomi',
            'description' => 'This is a store of technology',
            'email' => 'xiaomi@gmail.com',
            'user_id' => User::where('email','adminXiaomi@gmail.com')->first()->id,
            'image_path' => 'https://www.movilzona.es/app/uploads/2018/04/xiaomi-logo.jpg?x=810'

        ]);
        $store->save();

        $store = Store::create([
            'name' => 'Samsung',
            'description' => 'This is a store of technology',
            'email' => 'samsung@gmail.com',
            'user_id' => User::where('email','adminSamsung@gmail.com')->first()->id,
            'image_path' => 'https://www.techdroy.com/wp-content/uploads/2019/03/GettyImages-1081194632-660x330.jpg'
        ]);
        $store->save();

        $store = Store::create([
            'name' => 'Apple',
            'description' => 'Tienda en donde se vende productos muy caros',
            'email' => 'apple@gmail.com',
            'user_id' => User::where('email','adminApple@gmail.com')->first()->id,
            'image_path' => 'https://t.ipadizate.es/2018/02/Logo-de-Apple.jpg'
        ]);
        $store->save();
    }
}
