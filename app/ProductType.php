<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $primaryKey = 'type_id';

    protected $fillable = [
        'name', 'full_name'
    ];

    public function product(){
        return $this->hasMany('App\Product', 'type_id', 'type_id');
    }

    public function category(){
        return $this->belongsTo("App\ProductCategory", 'category_id', 'category_id');
    }

    public function picture (){
        return $this->hasMany('App\ProductPicture', 'type_id', 'type_id');
    }
}
