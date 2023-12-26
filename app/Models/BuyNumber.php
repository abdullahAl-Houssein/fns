<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyNumber extends Model
{
    use HasFactory;
    protected $fillable = ['image1', 'image2', 'number_card', 'order_details_id'];

    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}
