<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name', 'category', 'quantity_of_product', 'price', 
        'product_characteristics', 'description', 'product_image',
    ];

    public function ratings(): HasMany
    {
    return $this->hasMany(Rating::class);
    }
}
