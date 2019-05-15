<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'category_id', 'name', 'price', 'stock'
    ];

    public function productCategory(){
        return $this->belongsTo("App\ProductCategory", 'category_id', 'category_id');
    }
}
