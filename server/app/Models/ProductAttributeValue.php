<?php

namespace App\Models;

use App\Models\Product;
use App\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductAttributeValue extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'product_id',
        'attribute_value_id'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function attributeValue() {
        return $this->belongsTo(AttributeValue::class);
    }
}
