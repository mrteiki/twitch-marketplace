<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image_url',
        'product_id'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
