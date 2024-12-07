<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('ftitle')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

   

    <!-- Bootstrap CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Add CSS Links (Bootstrap, FontAwesome, Custom CSS) -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    
    
    <link rel="stylesheet" href="{{ asset('frontend/css/category.css') }}">
    
    
   
    
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/slider.css') }}">
   
    
    
    
    --}}
    
    
    
    
   
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/layout.css') }}">
    

    <link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/new_arrival.css') }}">


    <link rel="stylesheet" href="{{ asset('frontend/css/category_card.css') }}">
    
    
    <link rel="stylesheet" href="{{ asset('frontend/css/display_category.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-2.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/brand_display.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-3.css') }}">  
    <link rel="stylesheet" href="{{ asset('frontend/css/category-4.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-5.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-7.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/category-8.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/slider.css') }}">




    <link rel="stylesheet" href="{{ asset('frontend/css/sidebar.css') }}">
    
    
    
    <link rel="stylesheet" href="{{ asset('frontend/css/product-details.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/shipping-information.css') }}">
    
    <link rel="stylesheet" href="{{ asset('frontend/css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/message-modal.css') }}"> 
    <link rel="stylesheet" href="{{ asset('frontend/css/payment-modal.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/contact.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/loader.css') }}"> --}}
    
    {{-- 
     --}}


    
    
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/category-6.css') }}">
    
  
    
    
    
    
    
      


    --}}
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/fixed-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/best_selling_products.css') }}"> --}}
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
           
            
            <div style="background-color: rgb(9, 9, 106)" class="message-icon" onclick="openChat()">
                <i class="fa-solid fa-message"></i>
            </div>
           
            @include('frontend.master.message-modal')
        <!-- Footer Section at the Bottom -->
       
            @include('frontend.includes.footer')

        </div>
        <!-- JS Scripts (jQuery, Bootstrap, Custom JS) -->
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        {{-- <script src="{{ asset('frontend/js/slider.js') }}"></script> --}}
        {{-- <script src="{{ asset('frontend/js/header.js') }}"></script> --}}

        <script src="{{ asset('frontend/js/sidebar.js') }}"></script>
        <script src="{{ asset('frontend/js/payment-modal.js') }}"></script>
        <script src="{{ asset('frontend/js/filter.js') }}"></script>
        <script src="{{ asset('frontend/js/cart.js') }}"></script>
        <script src="{{ asset('frontend/js/header.js') }}"></script>
        <script src="{{ asset('frontend/js/product-size-modal.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
       <!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const loader = document.getElementById("page-loader");
        if (loader) {
            loader.classList.add("hidden"); // Add the "hidden" class to hide the loader
        }
    });
</script> --}}



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
    
</html>
