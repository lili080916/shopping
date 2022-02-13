<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['name', 'slug', 'description', 'image', 'extract', 'visible', 'price', 'category_id'];
    
    //Relacion uno a muchos inversa con Category
     public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Relacion uno a uno con OrderItem
    public function order_item()
    {
        return $this->hasOne('App\OrderItem');
    }
}
