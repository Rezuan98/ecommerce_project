<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class CartController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        return view('frontend.pages.cart', compact('cart'));
    }

    public function add(Request $request)
{
    
    $cart = Session::get('cart', []);
    
   
    $productId = $request->input('product_id');
    $size = $request->input('size');
    $color = $request->input('color');
    $product = [
        'id' => $productId,
        'name' => $request->input('name'),
        'price' => $request->input('discount_price'), 
        'size' => $size,
        'color' => $color,
        'image' => $request->input('image'),
        'quantity' => $request->input('quantity', 1),
    ];

    
    $cartKey = $productId . '-' . $size .'-' . $color; 

    if (isset($cart[$cartKey])) {
       
        $cart[$cartKey]['quantity'] += $product['quantity'];
    } else {
        
        $cart[$cartKey] = $product;
    }

    
    Session::put('cart', $cart);

  
    return response()->json(['success' => 'Product added to cart.', 'cart' => $cart]);
}


public function update(Request $request)

{ 
    
    $cart = Session::get('cart', []);

    $productId = $request->input('product_id');
    $size = $request->input('size');
    $color = $request->input('color');
    $quantity = $request->input('quantity');

    $cartKey = $productId . '-' . $size . '-' . $color; 

    if (isset($cart[$cartKey])) {
       
        $cart[$cartKey]['quantity'] = $quantity;
    } else {
        return response()->json(['error' => 'Product not found in cart.'], 404);
    }

   
    Session::put('cart', $cart);

    
    return response()->json(['success' => 'Cart updated.', 'cart' => $cart]);
}

public function remove(Request $request)
{
    
    $cart = session()->get('cart', []);

    
    $productId = $request->input('product_id');
    $size = $request->input('size');
    $color = $request->input('color');
    
    
    $cartKey = $productId . '-' . $size . '-' . $color;

    
    if (isset($cart[$cartKey])) {
        unset($cart[$cartKey]);
    }

   
    session()->put('cart', $cart);

    return response()->json(['success' => true, 'cart' => $cart]);
}

   



    public function shipmentInformation()
    {

       
    
        $cart = session()->get('cart', []);
    
        
        $totalAmount = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
    
       
        return view('frontend.pages.shipment', compact('cart', 'totalAmount'));
    }



//     public function buyNow(Request $request)
// {
//     $validated = $request->validate([
//         'product_id' => 'required|exists:products,id',
//         'name' => 'required|string',
//         'price' => 'required|numeric',
//         'image' => 'required|string',
//         'size' => 'required|string',
//         'color' => 'required|string',
//         'quantity' => 'required|integer|min:1',
//     ]);

//     // Store the product data in the session
//     session(['buy_now_product' => $validated]);

//     // Return a success response
//     return response()->json(['success' => true]);
// }
}


