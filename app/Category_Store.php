<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Store extends Model
{
    public function store()
    {
        return $this->hasOne(Store::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
