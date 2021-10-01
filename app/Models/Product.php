<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    use HasFactory;

    protected $fillable = [
    'title',
    'code',
    'description',
    'price',
    'category',
    'gender',
    'type',
    'image',
    ];

    public function wishlist(){
        return $this->hasMany(Wishlist::class);
    }

    public function typeproducts(){
        return $this->hasMany(TypeProducts::class);
    }
}
