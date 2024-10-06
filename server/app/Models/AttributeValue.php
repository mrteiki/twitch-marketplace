<?php

namespace App\Models;

use App\Models\Attribute;
use App\Models\ProductAttributeValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttributeValue extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'value',
        'attribute_id'
    ];

    public function attribute() {
        return $this->belongsTo(Attribute::class);
    }

    public function productAttributes() {
        return $this->hasMany(ProductAttributeValue::class);
    }
}
