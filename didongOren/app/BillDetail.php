<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
    protected $table = "bill_detail";
    public $timestamps = false;

    function Bill(){
        return $this->belongsTo('App\Bill','id_detail','id');
    }
}
