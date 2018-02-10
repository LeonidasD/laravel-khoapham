<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    //
    protected $table = "product_brand";
    public $timestamps = false;

    function Product(){
        return $this->hasMany('App\Product','id_brand','id');
    }

    function ProductType(){
        return $this->belongsToMany(
            'App\ProductType',
            'product_brand_type',
            'id_brand',
            'id_type'
        );
    }
}
