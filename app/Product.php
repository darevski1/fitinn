<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'user_id', 'cat_id', 'slug', 'post_uid'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->belongsTo('App\Category', 'cat_id');
    }

    public function photos(){
        return $this->hasMany('App\Photos', 'product_id');
    }
}
