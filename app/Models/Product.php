<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand', 'description', 'category', 'style', 'activity', 'gender'];

    public function activity() {
        return $this->belongsTo('App\Models\ProductActivity');
    }
    public function brand() {
        return $this->belongsTo('App\Models\ProductBrand');
    }
    public function category() {
        return $this->belongsTo('App\Models\ProductCategory');
    }
    public function gender() {
        return $this->belongsTo('App\Models\ProductGender');
    }
    public function style() {
        return $this->belongsTo('App\Models\ProductStyle');
    }
}
