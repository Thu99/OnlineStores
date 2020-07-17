<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public function image()
    {
        return $this->hasMany('App\ProductImage');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
