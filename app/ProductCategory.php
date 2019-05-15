<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'type' , 'category', 'flutes', 'coating', 'hardness', 'picture'
    ];

    public function product(){
        return $this->hasMany('App\Product', 'category_id', 'category_id');
    }
}
