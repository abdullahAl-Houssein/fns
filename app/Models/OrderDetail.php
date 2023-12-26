<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'order_id', 'unit_price', 'total_price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details');
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }

    public function buyNumbers()
    {
        return $this->hasMany(BuyNumber::class);
    }
}
