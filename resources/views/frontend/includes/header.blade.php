<div class="nav_super_class">

  <div class="nav_common_container">


    <header class="header">
      <!-- Logo -->
      <div class="logo">
        <a href="{{ route('index') }}">BrandLogo</a>
      </div>   
    
      <!-- Navigation Links -->
      <div class="nav-links">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
              <li class="nav-item dropdown mega-dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                      Categories
                  </a>
                  <div class="dropdown-menu container-fluid">
                      <div class="row">
                          <div class="col-lg-2 mega-dropdown-column">
                              <h6>Electronics</h6>
                              <ul>
                                  <li><a href="#">Smartphones</a></li>
                                  <li><a href="#">Laptops</a></li>
                                  <li><a href="#">Tablets</a></li>
                                  <li><a href="#">Accessories</a></li>
                              </ul>
                          </div>
                          <div class="col-lg-2 mega-dropdown-column">
                              <h6>Clothing</h6>
                              <ul>
                                  <li><a href="#">Men's Wear</a></li>
                                  <li><a href="#">Women's Wear</a></li>
                                  <li><a href="#">Kids' Wear</a></li>
                                  <li><a href="#">Accessories</a></li>
                              </ul>
                          </div>
                          <div class="col-lg-2 mega-dropdown-column">
                              <h6>Home & Kitchen</h6>
                              <ul>
                                  <li><a href="#">Furniture</a></li>
                                  <li><a href="#">Appliances</a></li>
                                  <li><a href="#">Decor</a></li>
                                  <li><a href="#">Kitchenware</a></li>
                              </ul>
                          </div>
                          <div class="col-lg-2 mega-dropdown-column">
                              <h6>Beauty & Personal Care</h6>
                              <ul>
                                  <li><a href="#">Skincare</a></li>
                                  <li><a href="#">Makeup</a></li>
                                  <li><a href="#">Hair Care</a></li>
                                  <li><a href="#">Fragrances</a></li>
                              </ul>
                          </div>
                          <div class="col-lg-2 mega-dropdown-column">
                              <h6>Sports & Outdoors</h6>
                              <ul>
                                  <li><a href="#">Fitness</a></li>
                                  <li><a href="#">Camping</a></li>
                                  <li><a href="#">Cycling</a></li>
                                  <li><a href="#">Sports Gear</a></li>
                              </ul>
                          </div>
                          <div class="col-lg-2 mega-dropdown-column">
                              <h6>Books & Stationery</h6>
                              <ul>
                                  <li><a href="#">Fiction</a></li>
                                  <li><a href="#">Non-Fiction</a></li>
                                  <li><a href="#">Stationery</a></li>
                                  <li><a href="#">Educational</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </li>
          </ul>
      </div>
      </div>
    
      <!-- Search Bar -->
      <div class="search-bar">
        <input type="text" placeholder="Search products">
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