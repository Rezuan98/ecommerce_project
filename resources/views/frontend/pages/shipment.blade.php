@extends('frontend.master.master')

@section('content')
<h2 class="shipping-title">Shipping Information</h2>
<div class="container border p-4">

    <div class="row">
          <div class="col-lg-6 ">
            <form class="shipping-form" method="POST" action="{{ route('order.place') }}" enctype="multipart/form-data">
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
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country" placeholder="Enter your country" required>
                </div>
        
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
                <label for="location">Shipping Location</label>
                <select id="location" name="location" class="form-control">
                    <option value="">Select Area</option>
                    <option value="inside-dhaka">Inside Dhaka</option>
                    <option value="outside-dhaka">Outside Dhaka</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="total">Total Amount</label>
                <input type="text" id="total" name="total" class="form-control" value="{{ $totalAmount }}" readonly>
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
          </div>
    </div>
   
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    
       
        
    </form>
</div>










<script>
    // Initial totalAmount passed from Blade
    let totalAmount = {{ $totalAmount }};

    // Update total based on shipping location
    document.getElementById('location').addEventListener('change', function () {
        let shippingFee = 0;

        if (this.value === 'inside-dhaka') {
            shippingFee = 60; // Inside Dhaka shipping fee
        } else if (this.value === 'outside-dhaka') {
            shippingFee = 120; // Outside Dhaka shipping fee
        }

        // Calculate the updated total
        let updatedTotal = totalAmount + shippingFee;

        // Update the total amount field
        document.getElementById('total').value = updatedTotal.toFixed(2);
    });
</script>



@endsection
