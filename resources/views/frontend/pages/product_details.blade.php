@extends('frontend.master.master')

@section('content')
<div class="product-details">
    <!-- Left Container: Product Image -->
    <div class="left-container">
        <div class="product-image-details">
            <img src="{{ asset('/storage/'.$product_details->image) }}" alt="Product Image">
        </div>

    </div>
       

       
   

    <!-- Right Container: Product Details -->
    <div class="right-container">
        <div class="detail-texts">
            <h1 class="product-title">{{ $product_details->name }}</h1>
            <p class="product-price">৳ {{ $product_details->discount_price }}</p>
            <del> <p class="text-danger">৳ {{ $product_details->price }}</p></del>
            <p class="product-description">
                {{ $product_details->description }}
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
                <div class="product-actions">
                    <label for="size">Available Colors:</label>
                    <select id="size" class="product-size">
                        <option value="S">Red</option>
                        <option value="M">Green</option>
                        <option value="L">Black</option>
                        <option value="XL">white</option>
                    </select>
                <div class="buttondiv d-flex justify-content-start">
                  <div class=""><button class="buynow_button">Buy Now</button></div> 
                  <div class=""><button onclick="addToCart('{{ $product_details->id }}', '{{ $product_details->name }}', '{{ $product_details->discount_price }}', '{{ asset('/storage/' . $product_details->image) }}')" class="add-to-cart-btn">Add To Cart</button></div>

                </div>
                
            </div>
        </div>

          <!-- Detailed Specification Section -->
          

        <!-- Size Chart Section -->
        
    </div>

   
    </div>
    <div class="third-container" style="width: 350px;border-radious:5px; padding:20px;">
        <div class="delivery-info">
            <div class="address-section">
                <i class="fas fa-map-marker-alt"></i>
                <span class="address">Dhaka, Dhaka North, Banani Road No. 12 - 19</span>
                <a href="#" class="change-link">CHANGE</a>
            </div>
            <div class="delivery-details">
                <div class="detail-item">
                    <i class="fas fa-shipping-fast"></i>
                    <div>
                        <p class="detail-title">Standard Delivery</p>
                        <p class="detail-subtitle">Guaranteed by 5 days</p>
                    </div>
                    <span class="price">৳ 60</span>
                </div>
                <div class="detail-item">
                    <i class="fas fa-money-bill-wave"></i>
                    <p class="detail-title">Cash on Delivery Available</p>
                </div>
            </div>
            <div class="return-warranty">
                <p class="section-title">Return & Warranty</p>
                <div class="detail-item">
                    <i class="fas fa-undo"></i>
                    <p class="detail-title">7 Days Returns</p>
                </div>
                <div class="detail-item">
                    <i class="fas fa-shield-alt"></i>
                    <p class="detail-title">Warranty not available</p>
                </div>
            </div>
        </div>
       
      
          </div>
</div>







<div class="detail-container" style="width: 90%;">

    <!-- Tab Buttons -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="specs-tab" data-bs-toggle="tab" data-bs-target="#specs" type="button" role="tab" aria-controls="specs" aria-selected="true">Product Specification</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="faq-tab" data-bs-toggle="tab" data-bs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false">FAQ</button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content">
        <!-- Product Specification Tab -->
        <div class="tab-pane fade show active" id="specs" role="tabpanel" aria-labelledby="specs-tab">
            <div class="row tab-content-container" >
                <div class="col-md-3 " >
                    <p><strong>Material:</strong> High-quality cotton</p>
                    <p><strong>Material:</strong> High-quality cotton</p>
                    <p><strong>Material:</strong> High-quality cotton</p>
                    <p><strong>Material:</strong> High-quality cotton</p>
                    <p><strong>Material:</strong> High-quality cotton</p>
                    

                </div>
                <div class="col-md-3">
                    <p><strong>Size:</strong> Medium</p>
                    <p><strong>Size:</strong> Medium</p>
                    <p><strong>Size:</strong> Medium</p>
                    <p><strong>Size:</strong> Medium</p>
                    <p><strong>Size:</strong> Medium</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Weight:</strong> 500g</p>
                    <p><strong>Weight:</strong> 500g</p>
                    <p><strong>Weight:</strong> 500g</p>
                    <p><strong>Weight:</strong> 500g</p>
                    <p><strong>Weight:</strong> 500g</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Color:</strong> Blue</p>
                    <p><strong>Color:</strong> Blue</p>
                    <p><strong>Color:</strong> Blue</p>
                    <p><strong>Color:</strong> Blue</p>
                    <p><strong>Color:</strong> Blue</p>
                </div>
            </div>
        </div>

        <!-- FAQ Tab -->
        <div class="tab-pane fade" id="faq" role="tabpanel" aria-labelledby="faq-tab">
            <div class="row tab-content-container">
                <div class="col-md-3 col-sm-12 ">
                    <p><strong>Q1:</strong> What is the return policy?</p>
                    <p><strong>Q1:</strong> What is the return policy?</p>
                    <p><strong>Q1:</strong> What is the return policy?</p>
                    <p><strong>Q1:</strong> What is the return policy?</p>
                    <p><strong>Q1:</strong> What is the return policy?</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <p><strong>Q2:</strong> Is there a warranty?</p>
                    <p><strong>Q2:</strong> Is there a warranty?</p>
                    <p><strong>Q2:</strong> Is there a warranty?</p>
                    <p><strong>Q2:</strong> Is there a warranty?</p>
                    <p><strong>Q2:</strong> Is there a warranty?</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <p><strong>Q3:</strong> How long does delivery take?</p>
                    <p><strong>Q3:</strong> How long does delivery take?</p>
                    <p><strong>Q3:</strong> How long does delivery take?</p>
                    <p><strong>Q3:</strong> How long does delivery take?</p>
                    <p><strong>Q3:</strong> How long does delivery take?</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <p><strong>Q4:</strong> Is cash on delivery available?</p>
                    <p><strong>Q4:</strong> Is cash on delivery available?</p>
                    <p><strong>Q4:</strong> Is cash on delivery available?</p>
                    <p><strong>Q4:</strong> Is cash on delivery available?</p>
                    <p><strong>Q4:</strong> Is cash on delivery available?</p>
                </div>
            </div>
        </div>
    </div>

</div>






















<h3 style="margin-top: 20px;">You may also like</h3>
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
                <button class="btn btn-cart" >Add to Cart</button>
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
