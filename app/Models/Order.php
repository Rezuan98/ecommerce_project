<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','order_id', 'name', 'email', 'phone','payment_method','payment_status' ,'status', 'total_amount', 'shipping_address'];


    public function orderItems()
    {
        return $this->hasMany(Order_item::class);
    }

    // Define the relationship between Order and User (optional, if user exists)
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
