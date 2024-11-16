@extends('frontend.master.master')

@section('content')

<div class="parent-container">
    <!-- Sidebar Section -->
    <div class="child-1">
        <div class="sidebar">
            <h5>Categories</h5>
            <ul class="category-list">
                <li>
                    <input type="checkbox"> New Arrival ⚡
                </li>
                <li>
                    <input type="checkbox"> Top Selling ⚡
                </li>
                <li>
                    <input type="checkbox"> Free Delivery ⚡
                </li>
                <li>
                    Mens
                    <ul class="subcategory-list">
                        <li>
                            <input type="checkbox"> Half Sleeve T-Shirt
                            <ul class="sub-subcategory-list">
                                <li><input type="checkbox"> Blank</li>
                                <li><input type="checkbox"> Printed</li>
                            </ul>
                        </li>
                        <li>
                            <input type="checkbox"> Full Sleeve T-Shirt
                            <ul class="sub-subcategory-list">
                                <li><input type="checkbox"> Blank</li>
                                <li><input type="checkbox"> Printed</li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content Section-->
    <div class="child-2">
        <!--Filter Section-->
        <div class="filter">
            <input type="text" placeholder="Search a product" class="search-input">
            <button class="btn clear-btn">Clear refinements</button>
        </div>

        <!-- Products Section -->
        <div class="products">
            <div class="product-grid">
                <!-- Sample Product Card -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
                        <div class="overlay">
                            <button class="btn btn-cart" onclick="openModal()">Add to Cart</button>
                            <button class="btn btn-buy" onclick="openModal()">Buy Now</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="product-title" >Product Name</h6>
                        <p class="price">$99.99</p>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
                        <div class="overlay">
                            <button class="btn btn-cart" onclick="openModal()">Add to Cart</button>
                            <button class="btn btn-buy" onclick="openModal()">Buy Now</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="product-title">Product Name</h6>
                        <p class="price">$99.99</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
                        <div class="overlay">
                            <button class="btn btn-cart" onclick="openModal()">Add to Cart</button>
                            <button class="btn btn-buy" onclick="openModal()">Buy Now</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="product-title">Product Name</h6>
                        <p class="price">$99.99</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
                        <div class="overlay">
                            <button class="btn btn-cart" onclick="openModal()">Add to Cart</button>
                            <button class="btn btn-buy" onclick="openModal()">Buy Now</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="product-title">Product Name</h6>
                        <p class="price">$99.99</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
                        <div class="overlay">
                            <button class="btn btn-cart" onclick="openModal()">Add to Cart</button>
                            <button class="btn btn-buy" onclick="openModal()" >Buy Now</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="product-title">Product Name</h6>
                        <p class="price">$99.99</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
                        <div class="overlay">
                            <button class="btn btn-cart" onclick="openModal()">Add to Cart</button>
                            <button class="btn btn-buy" onclick="openModal()">Buy Now</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="product-title">Product Name</h6>
                        <p class="price">$99.99</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
                        <div class="overlay">
                            <button class="btn btn-cart" onclick="openModal()">Add to Cart</button>
                            <button class="btn btn-buy" onclick="openModal()">Buy Now</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="product-title">Product Name</h6>
                        <p class="price">$99.99</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
                        <div class="overlay">
                            <button class="btn btn-cart" onclick="openModal()">Add to Cart</button>
                            <button class="btn btn-buy" onclick="openModal()">Buy Now</button>
                        </div>
                    </div>
                    <div class="product-info">
                        <h6 class="product-title">Product Name</h6>
                        <p class="price">$99.99</p>
                    </div>
                </div>
                <!-- Duplicate product-card for more products -->
            </div>
        </div>
    </div>
</div>

<!-- Modal Structure -->
<div id="sizeModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <h3 class="modal-title">Choose Your Size</h3>
        <p class="modal-description">Select your desired size from the options below.</p>
        <form id="sizeForm">
            <label for="size" class="size-label">Choose a size:</label>
            <select id="size" name="size" required>
                <option value="" disabled selected>Select size</option>
                <option value="S">Small</option>
                <option value="M">Medium</option>
                <option value="L">Large</option>
                <option value="XL">Extra Large</option>
            </select>
            <button type="submit" class="btn btn-confirm">Confirm</button>
        </form>
    </div>
</div>

@endsection
