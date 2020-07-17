<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'image_path','price','store_id','category_id'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class,'store_id');
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
