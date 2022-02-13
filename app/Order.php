<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['subtotal', 'shipping', 'user_id'];

    //Relacion uno a muchos inversa con User
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //Relacion uno a muchos con OrderItem
    public function order_items()
    {
        return $this->hasMany('App\OrderItem');
    }
}
