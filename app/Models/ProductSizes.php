<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSizes extends Model
{
    use HasFactory;

    protected $fillable = ['size', 'iventory', 'discount', 'sold', 'variant_id', 'product_id'];
}
