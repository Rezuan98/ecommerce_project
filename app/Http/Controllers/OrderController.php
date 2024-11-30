<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
   
    public function placeOrder(Request $request)
{

    
    // $request->validate([
    //     'name' => 'required|string|max:255',
    //     'address' => 'required|string|max:500',
    //     'city' => 'required|string|max:255',
    //     'country' => 'required|string|max:255',
    //     'phone' => 'required|string|max:15',
    //     'address_type' => 'required|string|in:inside,outside',
    //     'payment_method' => 'required|string|in:cash_on_delivery,visa_mastercard,bkash,nagad',
    // ]);

    $cart = Session::get('cart', []);
    if (empty($cart)) {
        return redirect()->back()->with('error', 'Your cart is empty!');
    }
    
    // Create the order
    $order = Order::create([
        'user_id' => Auth::check() ? Auth::id() : null, // Logged-in user or null for guest
        'name' => $request->input('name'),
        'email' => Auth::check() ? Auth::user()->email : null,
        'phone' => $request->input('phone'),
        'status' => 'pending',
        'payment_method' => $request->input('payment_method'),
        'total_amount' => $request->input('total'),
        'shipping_address' => $request->input('address') . ', ' . $request->input('city') . ', ' . $request->input('country'),
    ]);

   
    
    // Save order items
    foreach ($cart as $item) {
        Order_item::create([
            'order_id' => $order->id,
            'product_id' => $item['id'],
            'quantity' => $item['quantity'],
            'size' => $item['size'],
            'price' => $item['price'],
            'total' => $item['price'] * $item['quantity'],
        ]);
    }
   
    // Clear the cart session
    Session::forget('cart');

    return redirect()->route('order.success');
}


public function successOrder(){




    return view('frontend.pages.success_order');
}
}
