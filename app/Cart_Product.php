<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
    protected $fillable = [
        'product_id', 'cart_id', 'cantidad','precio_total'
    ];

    public function cart()
    {
        return $this->belongsTo(Cart::class,'cart_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}
