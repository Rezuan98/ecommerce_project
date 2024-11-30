@extends('frontend.master.master')

@section('content')
<div class="cart-container">
    <h2 class="cart-title">Shopping Cart</h2>

    @if (!empty($cart) && count($cart) > 0)
        <div class="cart-items">
            @foreach ($cart as $item)
                <div class="cart-item" data-id="{{ $item['id'] }}" data-price="{{ $item['price'] }}">
                    <div class="item-image">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                    </div>
                    <div class="item-details">
                        <h4 class="item-title">{{ $item['name'] }}</h4>
                        <h4 class="item-title">Size: <span class="text-info">{{ $item['size'] }}</span></h4>
                       
                        <p class="item-price">Price: ${{ number_format($item['price'], 2) }}</p>
                        <div class="item-quantity">
                            <button class="quantity-btn decrease" onclick="updateQuantity('{{ $item['id'] }}', -1)">-</button>
                            <input type="text" value="{{ $item['quantity'] }}" class="quantity-input" readonly>
                            <button class="quantity-btn increase" onclick="updateQuantity('{{ $item['id'] }}', 1)">+</button>
                        </div>
                        <div class="item-total">
                            <p>Total: ${{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                        </div>
                    </div>
                    <button class="btn btn-danger remove-btn" onclick="removeItem('{{ $item['id'] }}')">Remove</button>
                </div>
            @endforeach
        </div>

        <!-- Cart Summary Section -->
        <div class="cart-summary">
            <h3>Cart Summary</h3>
            <div class="summary-item">
                <span>Total:</span>
                <span id="total">${{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)), 2) }}</span>
            </div>
            <a href="{{ route('shipment') }}" class="btn btn-success checkout-btn">Proceed to Checkout</a>
        </div>
    @else
        <p>Your cart is empty. <a href="{{ route('index') }}">Start shopping now!</a></p>
    @endif
</div>
@endsection