<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    protected $fillable = ['photo_name', 'product_id'];

    public function product(){
        return $this->belongsToy('App\Product', 'product_id');
    }
}
