<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $table = "product_type";
    public $timestamps = false;

    function Product(){
        //foreign key của PT trong P
        return $this->hasMany('App\Product','id_type','id');
    }
    function ProductBrand(){
        return $this->belongsToMany(
            'App\ProductBrand',
            'product_brand_type',
            'id_type',
            'id_brand'
        );
    }
}
