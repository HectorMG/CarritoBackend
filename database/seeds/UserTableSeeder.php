<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'AdminXiaomi',
            'email' => 'adminXiaomi@gmail.com',
            'password' => Hash::make('adminXiaomi'),
            'role_id' => Role::where('name','seller')->first()->id
        ]);
        $user->save();

        $user = User::create([
            'name' => 'AdminSamsung',
            'email' => 'adminSamsung@gmail.com',
            'password' => Hash::make('adminSamsung'),
            'role_id' => Role::where('name','seller')->first()->id
        ]);
        $user->save();

        $user = User::create([
            'name' => 'AdminApple',
            'email' => 'adminApple@gmail.com',
            'password' => Hash::make('adminApple'),
            'role_id' => Role::where('name','seller')->first()->id
        ]);
        $user->save();
    }
}
