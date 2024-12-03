@extends('frontend.master.master')

@section('ftitle', 'About Us')

@section('content')
<div class="about-section">
    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>Welcome to Our Store</h1>
            <p>Your one-stop shop for premium-quality products.</p>
        </div>
    </div>

    <!-- About Us Content -->
    <div class="about-content container">
        <div class="row">
            <div class="col-md-6 about-text">
                <h2>Who We Are</h2>
                <p>
                    We are a single-vendor eCommerce platform dedicated to delivering the best shopping experience.
                    Our mission is to provide top-quality products with exceptional customer service. Every item
                    in our collection is carefully selected to meet your needs and exceed your expectations.
                </p>
            </div>
            <div class="col-md-6 about-image">
                <img src="{{ asset('/frontend/images/about.jpg') }}" alt="About Us" />
            </div>
        </div>

        <!-- Why Choose Us -->
        <div class="why-choose-us">
            <h2>Why Choose Us?</h2>
            <div class="features">
                <div class="feature">
                    <i class="fas fa-truck"></i>
                    <h4>Fast Delivery</h4>
                    <p>We ensure prompt delivery for all your orders, no matter where you are.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-star"></i>
                    <h4>Top Quality</h4>
                    <p>We provide only the best products, carefully selected for our customers.</p>
                </div>
                <div class="feature">
                    <i class="fas fa-headset"></i>
                    <h4>Customer Support</h4>
                    <p>Our dedicated team is here to assist you 24/7 with all your queries.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
