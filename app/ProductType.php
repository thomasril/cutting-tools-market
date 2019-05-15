<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $primaryKey = 'type_id';

    protected $fillable = [
        'type_id', 'name', 'pictures'
    ];

    public function product(){
        return $this->hasMany('App\Product', 'type_id', 'type_id');
    }
}
