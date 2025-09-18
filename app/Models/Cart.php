<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id',
        'customer_id',
        'quantity'
    ];

    public function product(){
        return $this->belongsTo(Product::class);

    }
}
