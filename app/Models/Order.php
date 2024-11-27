<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'guest_name', 'guest_email', 'guest_phone', 'status', 'total_amount', 'shipping_address'];
}
