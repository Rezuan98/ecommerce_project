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
    // Get the cart from session or initialize as an empty array
    $cart = Session::get('cart', []);
    
    // Get the product details from the request
    $productId = $request->input('product_id');
    $size = $request->input('size');
    $product = [
        'id' => $productId,
        'name' => $request->input('name'),
        'price' => $request->input('discount_price'), // Ensure correct price parameter
        'size' => $size,
        'image' => $request->input('image'),
        'quantity' => $request->input('quantity', 1),
    ];

    // Check if the product with the same ID and size already exists in the cart
    $cartKey = $productId . '-' . $size; // Use the combination of productId and size as the unique key

    if (isset($cart[$cartKey])) {
        // If the product with the same ID and size exists, increase the quantity
        $cart[$cartKey]['quantity'] += $product['quantity'];
    } else {
        // If the product with the same ID and size does not exist, add it to the cart
        $cart[$cartKey] = $product;
    }

    // Store the updated cart back in the session
    Session::put('cart', $cart);

    // Return a success response with the updated cart
    return response()->json(['success' => 'Product added to cart.', 'cart' => $cart]);
}


public function update(Request $request)

{ 
    
    $cart = Session::get('cart', []);

    $productId = $request->input('product_id');
    $size = $request->input('size');
    $quantity = $request->input('quantity');

    $cartKey = $productId . '-' . $size; // Unique key for product and size

    if (isset($cart[$cartKey])) {
        // Update the quantity in the cart
        $cart[$cartKey]['quantity'] = $quantity;
    } else {
        return response()->json(['error' => 'Product not found in cart.'], 404);
    }

    // Save the updated cart back to the session
    Session::put('cart', $cart);

    // Return updated cart data
    return response()->json(['success' => 'Cart updated.', 'cart' => $cart]);
}

public function remove(Request $request)
{
    // Get the cart from the session
    $cart = session()->get('cart', []);

    // Get the product_id and size from the request
    $productId = $request->input('product_id');
    $size = $request->input('size');
    
    // Create a key using productId and size (e.g., '8-S')
    $cartKey = $productId . '-' . $size;

    // Check if the item exists in the cart and remove it
    if (isset($cart[$cartKey])) {
        unset($cart[$cartKey]);
    }

    // Update the cart in the session
    session()->put('cart', $cart);

    return response()->json(['success' => true, 'cart' => $cart]);
}

   



    public function shipmentInformation()
    {
        $cart = session()->get('cart', []);
    
        // Calculate the total amount (no commas for JS calculations)
        $totalAmount = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
    
        // Pass the cart and totalAmount to the view
        return view('frontend.pages.shipment', compact('cart', 'totalAmount'));
    }
}


