<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_item extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id', 'quantity','size', 'price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Define the relationship between OrderItem and Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
}
