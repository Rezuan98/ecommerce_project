@extends('frontend.master.master')

@section('content')
<div class="product-details">
    <!-- Left Container: Product Image -->
    <div class="left-container">
        <div class="product-image-details">
            <img id="productImage" src="{{ asset('/storage/'.$product_details->image) }}" alt="Product Image">
        </div>

    </div>
       

       
   

    <!-- Right Container: Product Details -->
    <div class="right-container">
        <div class="detail-texts">
            <input type="hidden" id="productId" value="{{ $product_details->id }}">
            <h1 id="productName" class="product-title">{{ $product_details->name }}</h1>
            <p id="productPrice" class="product-price">৳ {{ $product_details->discount_price }}</p>
            <del> <p class="text-danger">৳ {{ $product_details->price }}</p></del>
            <p class="product-description">
                {{ $product_details->description }}
            </p>


          <!-- Select Color -->
<label for="color">Available Colors:</label>
<select class="form-select" id="colorSelect">
    <option value="" disabled selected>Select color</option>
    @if(!empty($product_details->colors) && is_array($product_details->colors))
        @foreach ($product_details->colors as $color)
            <option value="{{ $color }}">{{ $color }}</option>
        @endforeach
    @else
        <option value="" disabled>No colors available</option>
    @endif
</select>

<!-- Select Size -->
<label for="size">Select Size:</label>
<select class="form-select" id="sizeSelect">
    <option value="" disabled selected>Select size</option>
    @if(!empty($product_details->sizes) && is_array($product_details->sizes))
        @foreach ($product_details->sizes as $size)
            <option value="{{ $size }}">{{ $size }}</option>
        @endforeach
    @else
        <option value="" disabled>No sizes available</option>
    @endif
</select>

<!-- Quantity -->
<div class="quantity-container mt-2 mb-2">
    <button class="quantity-btn decrease" onclick="updateQuantityfromDetails(-1)">-</button>
    <input type="text" value="1" id="quantityInput" class="quantity-input">

    <button class="quantity-btn increase" onclick="updateQuantityfromDetails(1)">+</button>
</div>

<!-- Add to Cart Button -->











                
<button 
type="button" 
class="cart-btn" 
onclick="handleAddToCart()">
Add To Cart
</button>
        


                </div>
                
            </div>
        </div>

          <!-- Detailed Specification Section -->
          

        <!-- Size Chart Section -->
        
    

   
    
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



<div class="modal fade" id="productSizeModal" tabindex="-1" aria-labelledby="productSizeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productSizeModalLabel">Choose Your Size</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="productSizeForm">
            <div class="mb-3">
              <label for="productSize" class="form-label">Available Sizes</label>
              <select class="form-select" id="productSize" name="size" required>
                <option value="" selected disabled>Select a size</option>
                <option value="S">Small (S)</option>
                <option value="M">Medium (M)</option>
                <option value="L">Large (L)</option>
                <option value="XL">Extra Large (XL)</option>
              </select>
            </div>
            <div class="text-center">
              <button type="submit"  onclick="addToCart('{{ $product_details->id }}', '{{ $product_details->name }}', '{{ $product_details->discount_price }}', '{{ asset('/storage/' . $product_details->image) }}', document.getElementById('productSize').value)" class="btn btn-success w-100">Confirm Size</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script>
   
   function updateQuantityfromDetails(change) {
    const quantityInput = document.getElementById('quantityInput');
    let currentQuantity = parseInt(quantityInput.value) || 1;

    currentQuantity = Math.max(1, currentQuantity + change); // Prevent quantity from going below 1
    console.log(`Updated Quantity: ${currentQuantity}`); // Debugging output
    quantityInput.value = currentQuantity;
}

function handleAddToCart() {
    // Get product details
    const productId = document.getElementById('productId').value;
    const name = document.getElementById('productName').innerText;
    const price = parseFloat(document.getElementById('productPrice').innerText.replace('৳', '').trim());
    const image = document.getElementById('productImage').src;

    // Get selected color and size
    const colorSelect = document.getElementById('colorSelect');
    const selectedColor = colorSelect.value;

    const sizeSelect = document.getElementById('sizeSelect');
    const selectedSize = sizeSelect.value;

    // Get selected quantity
    const quantityInput = document.getElementById('quantityInput');
    const quantity = parseInt(quantityInput.value) || 1;

    // Validate input
    if (!selectedColor || !selectedSize) {
        alert('Please select both a color and a size.');
        return;
    }

    // Prepare data to send
    const cartData = {
        product_id: productId,
        name: name,
        discount_price: price,
        image: image,
        size: selectedSize,
        color: selectedColor,
        quantity: quantity,
    };

    // Send data to the server
    fetch('/cart/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        },
        body: JSON.stringify(cartData),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                alert('Product added to cart successfully!');

                // Update cart count dynamically
                const cartCountElement = document.getElementById('cart-count');
                if (cartCountElement) {
                    const newCount = Object.values(data.cart).reduce((sum, item) => sum + item.quantity, 0);
                    cartCountElement.innerText = newCount;
                }
            } else {
                alert('Failed to add product to cart.');
            }
        })
        .catch((error) => console.error('Error:', error));
}

  </script>

@endsection
