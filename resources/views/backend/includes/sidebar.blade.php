<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Admin Sections</div>







                   <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                      Category
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('create.category') }}">Add Category</a>
                            <a class="nav-link" href="{{ route('index.category') }}">Show Category</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayout" aria-expanded="false" aria-controls="collapseLayout">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                      Sub-Category
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayout" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('create.subcategory') }}">Add subcategory</a>
                            <a class="nav-link" href="{{ route('index.subcategory') }}">Show subcategory</a>
                        </nav>
                    </div>








                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBrand" aria-expanded="false" aria-controls="collapseBrand">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Brand
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseBrand" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('create.brand') }}">Add New Brand</a>
                            <a class="nav-link" href="{{ route('index.brand') }}">Show Brands</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseColor" aria-expanded="false" aria-controls="collapseColor">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Color
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseColor" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('create.color') }}">Add New Color</a>
                            <a class="nav-link" href="{{ route('index.color') }}">Show Color</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSize" aria-expanded="false" aria-controls="collapseSize">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Size
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseSize" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('create.size') }}">Add New Size</a>
                            <a class="nav-link" href="{{ route('index.size') }}">Show Size</a>
                        </nav>
                    </div>




                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBanner" aria-expanded="false" aria-controls="collapseBanner">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Banners
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseBanner" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('create.banner') }}">Add Banner</a>
                            <a class="nav-link" href="{{ route('index.banner') }}">Show Banners</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseorders" aria-expanded="false" aria-controls="collapseorders">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Orders
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseorders" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('create.banner') }}">All Orders</a>
                            <a class="nav-link" href="{{ route('order.show') }}">Pending Orders</a>
                            <a class="nav-link" href="{{ route('shipped.orders') }}">Shipped Orders</a>
                            <a class="nav-link" href="{{ route('completed.orders') }}">Completed Orders</a>
                            <a class="nav-link" href="{{ route('canceled.orders') }}">Canceled Orders</a>
                        </nav>
                    </div>

                    
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsemessages" aria-expanded="false" aria-controls="collapsemessages">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                     Messages
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsemessages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('create.banner') }}">New Message</a>
                            <a class="nav-link" href="{{ route('index.banner') }}">All Message</a>
                        </nav>
                    </div>















                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Products
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProducts" aria-labelledby="headingProducts" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('create.product') }}">
                                <i class="fas fa-plus-circle"></i> Add Product
                            </a>
                            <a class="nav-link" href="{{ route('index.product') }}">
                                <i class="fas fa-list"></i> Show Products
                            </a>
                        </nav>
                    </div>
                    
                           
                        </nav>
                    </div>
                    
                   
                    
                </div>
            </div>
            
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                
               @yield('backend-contents')
             
            </div>
        </main>
        
    </div>
</div>