@extends('frontend.master.master')

@section('content')
<div class="cart-container">
    <h2 class="cart-title">Shopping Cart</h2>

    <div class="cart-items">
        <!-- Sample Cart Item -->
        <div class="cart-item" data-price="99.99">
            <div class="item-image">
                <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
            </div>
            <div class="item-details">
                <h4 class="item-title">Product Name</h4>
                <p class="item-price">$99.99</p>
                <div class="item-quantity">
                    <button class="quantity-btn decrease">-</button>
                    <input type="text" value="1" class="quantity-input" readonly>
                    <button class="quantity-btn increase">+</button>
                </div>
            </div>
            <div class="item-total">
                <p>$99.99</p>
            </div>
        </div>

        <div class="cart-item" data-price="49.99">
            <div class="item-image">
                <img src="{{ asset('product_images/p2.jpg') }}" alt="Product Name">
            </div>
            <div class="item-details">
                <h4 class="item-title">Another Product</h4>
                <p class="item-price">$49.99</p>
                <div class="item-quantity">
                    <button class="quantity-btn decrease">-</button>
                    <input type="text" value="1" class="quantity-input" readonly>
                    <button class="quantity-btn increase">+</button>
                </div>
            </div>
            <div class="item-total">
                <p>$49.99</p>
            </div>
        </div>
    </div>

    <!-- Cart Summary Section -->
    <div class="cart-summary">
        <h3>Cart Summary</h3>
        <div class="summary-item">
            <span>Total</span>
            <span id="total">$149.98</span>
        </div>


        <a href="{{ route('shipment') }}" class="btn btn-success pr-15px" style="padding-right:30px; padding-left:30px; margin-top:20px;">Proceed to Checkout</a>
    </div>
</div>
@endsection
