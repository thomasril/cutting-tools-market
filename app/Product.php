<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $fillable = [
        'product_id', 'category_id', 'name', 'type_id', 'price', 'stock', 'lot_size'
    ];

    public function productCategory(){
        return $this->belongsTo("App\ProductCategory", 'category_id', 'category_id');
    }

    public function productType(){
        return $this->belongsTo("App\ProductType", 'type_id', 'type_id');
    }
}
