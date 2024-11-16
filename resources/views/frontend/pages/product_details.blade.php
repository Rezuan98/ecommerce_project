@extends('frontend.master.master')

@section('content')
<div class="product-details">
    <!-- Left Container: Product Image -->
    <div class="left-container">
        <div class="product-image-details">
            <img src="{{ asset('product_images/p4.jpg') }}" alt="Product Image">
        </div>
    </div>

    <!-- Right Container: Product Details -->
    <div class="right-container">
        <div class="detail-texts">
            <h1 class="product-title">This is product text</h1>
            <p class="product-price">৳ 1200</p>
            <p class="product-description">
                This is the product description. It contains detailed information about the product features, materials, and usage.
            </p>
            <div class="product-actions">
                <label for="size">Select Size:</label>
                <select id="size" class="product-size">
                    <option value="S">Small</option>
                    <option value="M">Medium</option>
                    <option value="L">Large</option>
                    <option value="XL">Extra Large</option>
                </select>
                <div class="quantity-container">
                    <button class="quantity-btn decrease">-</button>
                    <input type="text" value="1" class="quantity-input" readonly>
                    <button class="quantity-btn increase">+</button>
                </div>
                <button class="add-to-cart-btn">Add To Cart</button>
            </div>
        </div>

          <!-- Detailed Specification Section -->
          <div class="detailed-specifications">
            <h4>Detailed Specification:</h4>
            <ul>
                <li>Finest quality Polyester</li>
                <li>Regular fit, Crew Neck Mid-weight, 145gsm.</li>
                <li>Sharp and long-lasting sublimation print</li>
                <li>Preshrunk to minimize shrinkage</li>
            </ul>
        </div>

        <!-- Size Chart Section -->
        <div class="size-chart">
            <h4>Size chart - In inches (Expected Deviation &lt; 3%)</h4>
            <table>
                <thead>
                    <tr>
                        <th>Size</th>
                        <th>Chest (Round)</th>
                        <th>Length</th>
                        <th>Sleeve</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>M</td>
                        <td>39</td>
                        <td>27.5</td>
                        <td>25.25</td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>40.5</td>
                        <td>28.5</td>
                        <td>26</td>
                    </tr>
                    <tr>
                        <td>XL</td>
                        <td>43</td>
                        <td>29</td>
                        <td>26.25</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>
<h3>You may also like</h3>
<hr>
<div class="related-products-container">
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>

    <!-- Duplicate the structure for additional products -->
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p4.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 730</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <div class="related-product-card">
        <div class="related-product-image">
            <img src="{{ asset('product_images/p1.jpg') }}" alt="Product Name">
        </div>
        <div class="related-product-info">
            <h6 class="related-product-title">Product Name</h6>
            <p class="price">৳ 640</p>
            <div class="product-actions">
                <button class="btn btn-cart">Add to Cart</button>
                <button class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>
    <!-- Add more cards as needed -->
</div>



@endsection
