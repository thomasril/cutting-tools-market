<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPicture extends Model
{
    protected $primaryKey = 'picture_id';

    protected $fillable = [
        'type_id', 'path'
    ];

    public function productType(){
        return $this->belongsTo("App\ProductType", 'type_id', 'type_id');
    }
}
