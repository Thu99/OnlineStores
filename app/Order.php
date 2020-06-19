<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['shipping_name', 'shipping_address', 'shipping_phone', 'total', 'notes', 'user_id'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
