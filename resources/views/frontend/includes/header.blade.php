<div class="nav_super_class">
    <div class="nav_common_container">
      <header class="header">
        <!-- Logo -->
        <div class="logo">
          <a href="{{ route('index') }}">BrandLogo</a>
        </div>
  
        <!-- Navigation Links -->
        <nav class="nav-links">
          <ul class="navbar">
            <li class="nav-item">
              <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown mega-dropdown">
              <a href="#" class="nav-link">Categories</a>
              <div class="mega-dropdown-menu">
                <div class="row">
                  <div class="col">
                    <h6>Electronics</h6>
                    <ul>
                      <li><a href="#">Smartphones</a></li>
                      <li><a href="#">Laptops</a></li>
                      <li><a href="#">Tablets</a></li>
                      <li><a href="#">Accessories</a></li>
                    </ul>
                  </div>
                  <div class="col">
                    <h6>Clothing</h6>
                    <ul>
                      <li><a href="#">Men's Wear</a></li>
                      <li><a href="#">Women's Wear</a></li>
                      <li><a href="#">Kids' Wear</a></li>
                      <li><a href="#">Accessories</a></li>
                    </ul>
                  </div>
                  <div class="col">
                    <h6>Clothing</h6>
                    <ul>
                      <li><a href="#">Men's Wear</a></li>
                      <li><a href="#">Women's Wear</a></li>
                      <li><a href="#">Kids' Wear</a></li>
                      <li><a href="#">Accessories</a></li>
                    </ul>
                  </div>
                  <div class="col">
                    <h6>Clothing</h6>
                    <ul>
                      <li><a href="#">Men's Wear</a></li>
                      <li><a href="#">Women's Wear</a></li>
                      <li><a href="#">Kids' Wear</a></li>
                      <li><a href="#">Accessories</a></li>
                    </ul>
                  </div>
                  <!-- Additional columns as needed -->
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Contact</a>
            </li>
          </ul>
        </nav>
  
        <!-- Search and Cart -->
        <div class="search-cart">
          <div class="search-bar">
            <input type="text" placeholder="Search products">
            <button>Search</button>
          </div>
          <a href="{{ route('cart.index') }}" class="cart">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-badge">{{ $cartCount ?? 0 }}</span>
          </a>
        </div>
  
        <!-- Hamburger for Mobile -->
        <div class="hamburger">
          <i class="fa-solid fa-bars"></i>
        </div>
      </header>
    </div>
  </div>
  