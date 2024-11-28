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
        $product = [
            'id' => $productId,
            'name' => $request->input('name'),
            'price' => $request->input('discount_price'), // Ensure correct price parameter
            'image' => $request->input('image'),
            'quantity' => $request->input('quantity', 1),
        ];
    
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1;
        } else {
            $cart[$productId] = $product;
        }
    
        Session::put('cart', $cart);
    
        return response()->json(['success' => 'Product added to cart.', 'cart' => $cart]);
    }
    

    public function update(Request $request)
    {
        $cart = Session::get('cart', []);

        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $quantity;
        }

        Session::put('cart', $cart);

        return response()->json(['success' => 'Cart updated.', 'cart' => $cart]);
    }

    public function remove(Request $request)
    {
        $cart = Session::get('cart', []);
        $productId = $request->input('product_id');

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }

        Session::put('cart', $cart);

        return response()->json(['success' => 'Product removed from cart.', 'cart' => $cart]);
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


