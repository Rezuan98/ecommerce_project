<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('ftitle')</title>

    <!-- Bootstrap CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Add CSS Links (Bootstrap, FontAwesome, Custom CSS) -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/new_arrival.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category_card.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-8.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/display_category.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/brand_display.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/brand_display.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-2.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-3.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-4.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-5.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-6.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/best_selling_products.css') }}">
</head>

<body>
    <body>
        <!-- Header Section -->
        <div class="mycontainer">
            @include('frontend.includes.header')
        
    
        <!-- Navbar Section -->
    
            {{-- @include('frontend.module-1.includes.navbar') --}}
       
    
     
                
           <div class="content">

            @yield('content')


           </div>
    
            <!-- Main Content Section -->
           
               
            
          
    
        <!-- Footer Section at the Bottom -->
       
            @include('frontend.includes.footer')

        </div>
        <!-- JS Scripts (jQuery, Bootstrap, Custom JS) -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/slider.js') }}"></script>
        {{-- <script src="{{ asset('frontend/js/header.js') }}"></script> --}}

        <script src="{{ asset('frontend/js/sidebar.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
       <!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</body>
    
</html>
