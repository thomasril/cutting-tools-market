<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $table = 'sales';
    protected  $primaryKey = 'id';

    protected $fillable = [
        'order_id' ,'buyer_id', 'buyer_name', 'recipient_name', 'recipient_title',
        'recipient_phone',  'payment_method', 'subtotal', 'total_price', 'order_date',
        'delivery_id', 'delivery_date', 'invoice_id', 'invoice_date', 'status'
    ];

    function salesDetails(){
        return $this->hasMany('App\SalesDetail', 'order_id', 'order_id');
    }

    function buyer(){
        return $this->belongsTo('App\User', 'buyer_id');
    }

}
