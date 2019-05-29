<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $primaryKey = 'cart_id';

    protected $fillable = [
        'user_id', 'product_id', 'qty'
    ];

    public function product(){
        return $this->belongsTo("App\Product", 'product_id', 'product_id');
    }
}
