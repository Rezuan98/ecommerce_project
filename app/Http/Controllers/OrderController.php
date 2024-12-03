<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\Order_item;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPlacedNotification;

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
    

    $order_id = mt_rand(10000000, 99999999);
    // Create the order
    $order = Order::create([
        'user_id' => Auth::check() ? Auth::id() : null, // Logged-in user or null for guest
        'order_id' => $order_id,
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
//    $email = 'rezuanahmmeds@gmail.com';
//     Mail::to($email)->send(new OrderPlacedNotification($order));
    // Clear the cart session
    Session::forget('cart');


    return redirect()->route('order.success');
}


public function successOrder(){




    return view('frontend.pages.success_order');
}

public function showOrder(){

    
    $pending_order = Order::where('status','pending')->with('orderItems.product')->get();

  

    

    

    return view('backend.orders.pending_order',compact('pending_order'));
}

public function deleteOrder($id){

    Order::where('id',$id)->delete();

    return redirect()->back();


}

public function orderDetails($id){

    $get_order = Order_item::where('order_id',$id)->with('product')->get();

    $order = Order::where('id',$id)->first();

    

    return view('backend.orders.order_details',compact('get_order','order'));
}

public function updateOrderStatus(Request $request, $id)
{
    // Validate the request
    $validated = $request->validate([
        'status' => 'required|string|in:Pending,Shipped,Completed,Cancelled',
    ]);

    // Find the order and update its status
    $order = Order::findOrFail($id);
    $order->status = $request->status;
    $order->save();

    // Redirect back with success message
    return back()->with('success', 'Order status updated successfully.');
}



public function updatePaymentStatusSingle(Request $request, $id)
{
    // Validate the request
    $validated = $request->validate([
        'payment_status' => 'required|string|in:Pending,Completed,Failed',
    ]);

    // Find the order and update the payment status
    $order = Order::findOrFail($id);
    $order->payment_status = $request->payment_status;
    $order->save();

    // Redirect back with success message
    return back()->with('success', 'Payment status updated successfully.');
}

}
