<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = "bills";
    public $timestamps = false;

    function BillDetail(){
        return $this->hasMany('App\BillDetail','id_bill','id');
    }

    function Customer(){
        return $this->belongsTo('App\Customer','id_customer','id');
    }

    function Product(){
        return $this->belongsToMany(
           'App\Product',
           'bill_detail', 
           'id_bill',
           'id_product'
       );
   }
}
