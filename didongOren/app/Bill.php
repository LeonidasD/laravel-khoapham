<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = "bill";
    public $timestamps = false;

    function BillDetail(){
        return $this->hasMany('App\BillDetail','id_detail','id');
    }
}
