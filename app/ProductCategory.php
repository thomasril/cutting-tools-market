<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $primaryKey = 'category_id';

    protected $fillable = [
        'supplier_id', 'name', 'flutes', 'coating', 'hardness', 'picture'
    ];

    public function product(){
        return $this->hasMany('App\Product', 'category_id', 'category_id');
    }

    public function supplier(){
        return $this->belongsTo('App\User', 'supplier_id', 'id');
    }
}
