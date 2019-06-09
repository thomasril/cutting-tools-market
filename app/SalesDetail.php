<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    protected $table = 'sales_details';
    protected  $primaryKey = 'id';

    protected $fillable = [
        'order_id', 'product_id', 'qty'
    ];

    function sales(){
        return $this->belongsTo('App\Sales', 'order_id', 'order_id');
    }

    function product(){
        return $this->belongsTo('App\Product', 'product_id', 'product_id');
    }
}
