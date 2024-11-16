@extends('frontend.master.master')

@section('content')
<div class="shipping-container">
    <h2 class="shipping-title">Shipping Information</h2>

    <form class="shipping-form">
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

        <button type="submit" class="btn btn-submit">Proceed to Payment</button>
    </form>
</div>
@endsection
