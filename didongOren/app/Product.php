<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";
    public $timestamps = false;

    function ProductBrand(){
        return $this->belongsTo('App\ProductBrand','id_brand','id');
    }

    function ProductType(){
        return $this->belongsTo('App\ProductType','id_type','id');
    }

    function PageUrl(){
        return $this->belongsTo('App\PageUrl','id_url','id');
    }
}
