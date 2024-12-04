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
              <a href="{{ route('index') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item dropdown mega-dropdown">
              <a href="#" class="nav-link">Categories</a>
              <div class="mega-dropdown-menu">
                <div class="row">
                  <div class="col">
                    <h6>Electronics</h6>
                    <ul>
                        <div class="flex-colum" style="display: flex;flex-direction:column;">
                            <div> <li><a href="{{ route('all.product') }}">Smartphones</a></li></div>
                            <div> <li><a href="{{ route('all.product') }}">Smartphones</a></li></div>
                             <div><li><a href="{{ route('all.product') }}">Tablets</a></li></div>
                            <div> <li><a href="{{ route('all.product') }}">Accessories</a></li></div>
                        </div>
                    <div class="col">
                    <h6>Clothing</h6>
                    <ul>
                        <div class="flex-colum" style="display: flex;flex-direction:column;">
                            <div> <li><a href="{{ route('all.product') }}">Smartphones</a></li></div>
                            <div> <li><a href="{{ route('all.product') }}">Smartphones</a></li></div>
                             <div><li><a href="{{ route('all.product') }}">Tablets</a></li></div>
                            <div> <li><a href="{{ route('all.product') }}">Accessories</a></li></div>
                        </div>
                        <div class="col">
                            <h6>Clothing</h6>
                            <ul>
                                <div class="flex-colum" style="display: flex;flex-direction:column;">
                                    <div> <li><a href="{{ route('all.product') }}">Smartphones</a></li></div>
                                    <div> <li><a href="{{ route('all.product') }}">Smartphones</a></li></div>
                                     <div><li><a href="{{ route('all.product') }}">Tablets</a></li></div>
                                    <div> <li><a href="{{ route('all.product') }}">Accessories</a></li></div>
                                </div>
                                <div class="col">
                                    <h6>Clothing</h6>
                                    <ul>
                                        <div class="flex-colum" style="display: flex;flex-direction:column;">
                                            <div> <li><a href="{{ route('all.product') }}">Smartphones</a></li></div>
                                            <div> <li><a href="{{ route('all.product') }}">Smartphones</a></li></div>
                                             <div><li><a href="{{ route('all.product') }}">Tablets</a></li></div>
                                            <div> <li><a href="{{ route('all.product') }}">Accessories</a></li></div>
                                        </div>
                                    </ul>
                                  </div>
                            </ul>
                          </div>
                        
                    </ul>
                  </div>
                  
                  
                  
                    </ul>
                  </div>
                 
                  <!-- Additional columns as needed -->
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a href="{{ route('about') }}" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </li>
            <li class="nav-item">
              
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
            <span class="cart-badge" id="cart-count">{{ $cartCount ?? 0 }}</span>
        </a>
        
        </div>
        <button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">Hamburger</span>
        </button>
  
        <!-- Collapsible Navbar (Hidden on large screens, Visible only on small screens) -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          </ul>
        </div>
      </header>
     
    
    </div>
  </div>
  