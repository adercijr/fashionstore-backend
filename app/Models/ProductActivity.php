<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductActivity extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    public function product() {
        return $this->hasMany(('App\Models\Product'));
    }
}
