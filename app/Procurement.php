<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    protected $table = 'procurements';
    protected  $primaryKey = 'id';

    protected $fillable = [
        'procure_id' ,'reorder_date', 'product_id', 'qty', 'delivery_date', 'supplier',  'status'
    ];

    public function product(){
        return $this->belongsTo("App\Product", 'product_id', 'product_id');
    }

}
