<div class="nav_super_class">

  <div class="nav_common_container">


    <header class="header">
      <!-- Logo -->
      <div class="logo">
        <a href="{{ route('index') }}">BrandLogo</a>
      </div>   
    
      <!-- Navigation Links -->
      <div class="nav-links">
        {{-- <div class="dropdown">
          <a href="#shop">Shop <i class="fa-solid fa-circle-chevron-down"></i></a>
          <div class="dropdown-menu">
            <a href="#clothing" class="dropdown-item">Clothing</a>
            <a href="#electronics" class="dropdown-item">Electronics</a>
            <a href="#home-goods" class="dropdown-item">Home Goods</a>
            <a href="#accessories" class="dropdown-item">Accessories</a>
          </div>
        </div> --}}
      </div>
    
      <!-- Search Bar -->
      <div class="search-bar">
        <input type="text" placeholder="Search products, brands, etc.">
        <button>Search</button>
      </div>
    
      <!-- Cart Icon -->
      <a href="{{route('cart.index')}}" class="cart">
        <i class="fas fa-shopping-cart"></i>
        
        <span class="cart-badge" id="cart-count">{{ $cartCount ?? 0 }}</span>
      </a>


      <div class="hamburger" id="hamburger">
        <i class="fa-solid fa-bars"></i>
        
    </div>
    </header>
    
  </div>
</div>