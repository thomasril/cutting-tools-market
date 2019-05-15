<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'type' , 'category', 'name', 'price', 'stock', 'flutes', 'coating', 'hardness', 'picture'
    ];
}
