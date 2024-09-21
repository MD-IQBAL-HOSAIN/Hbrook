<?php

namespace App\Models;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function ptags()
    {
        return $this->belongsToMany(Ptag::class, 'product_ptag');
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
