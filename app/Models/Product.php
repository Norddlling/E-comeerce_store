<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'category', 'quantity_of_product', 'price', 
        'product_characteristics', 'description', 'product_image', 'users_raiting',
    ];
}
