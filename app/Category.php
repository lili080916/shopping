<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug', 'description', 'color'];
    public $timestamps = false;


    // Relacion uno a muchos con product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
