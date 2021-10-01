<?php

namespace App\Models;

use App\Models\Products;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_Product extends Model
{
    use HasFactory;

    protected $table = 'type_products';

    protected $fillable = [
        'id',
        'type_id',
        'product_id',
    ];
}
