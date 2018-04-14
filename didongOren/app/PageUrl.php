<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageUrl extends Model
{
    //
    public $table = "page_url";
    public $timestamps = false;

    function Product() {
        $this->hasOne('App\Product','id_url','id');
    }
}
