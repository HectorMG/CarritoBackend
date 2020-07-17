<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'seller';
        $role->description = 'This role is for seller of a store';
        $role->save();


        $role = new Role();
        $role->name = 'buyer';
        $role->description = 'This role is for buyer people';
        $role->save();
    }
}
