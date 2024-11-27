@extends('frontend.master.master')

@section('content')
<div class="shipping-container">
    <h2 class="shipping-title">Shipping Information</h2>

    <form class="shipping-form" method="POST" action="">
        @csrf
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" required>
        </div>

        <div class="form-group">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Enter your city" required>
        </div>

        <div class="form-group">
            <label for="state">State/Province</label>
            <input type="text" id="state" name="state" placeholder="Enter your state or province" required>
        </div>

        <div class="form-group">
            <label for="zip">Zip Code</label>
            <input type="text" id="zip" name="zip" placeholder="Enter your zip code" required>
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" id="country" name="country" placeholder="Enter your country" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>

        <div class="form-group">
            <h3 class="lead text-center text-muted mt-2">Select Payment Method</h3>
            <div class="payment-options">
                <!-- Cash on Delivery -->
                <label class="payment-card">
                    <input type="radio" name="payment_method" value="cash_on_delivery">
                    <img src="{{ asset('product_images/cod.png') }}" alt="Cash on Delivery">
                    <p>Cash on Delivery</p>
                </label>
            
                <!-- Visa/MasterCard -->
                <label class="payment-card">
                    <input type="radio" name="payment_method" value="visa_mastercard">
                    <img src="{{ asset('product_images/card-pay.png') }}" alt="Visa/MasterCard">
                    <p>Visa / MasterCard</p>
                </label>
            
                <!-- bKash -->
                <label class="payment-card">
                    <input type="radio" name="payment_method" value="bkash">
                    <img src="{{ asset('product_images/bkash.jpg') }}" alt="bKash">
                    <p>bKash</p>
                </label>
            
                <!-- Nagad -->
                <label class="payment-card">
                    <input type="radio" name="payment_method" value="nagad">
                    <img src="{{ asset('product_images/nagad.png') }}" alt="Nagad">
                    <p>Nagad</p>
                </label>
            </div>
            
        </div>

        <button type="submit" class="btn btn-submit">Confirm Payment</button>
    </form>
</div>
@endsection
