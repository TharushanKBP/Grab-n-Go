<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'summary',
        'description',
        'cat_id',
        'child_cat_id',
        'price',
        'brand_id',
        'discount',
        'status',
        'photo',
        'stock',
        'is_featured',
        'condition'
    ];

    
}
