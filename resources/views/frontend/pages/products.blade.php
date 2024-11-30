@extends('frontend.master.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Section -->
        <div class="col-lg-3 col-md-2 d-none d-md-block m-0 p-0" >
            <div class="sidebar">
                <h2 class="sidebar-title">Categories</h2>
                <ul class="category-list">
                    @foreach ($allcategory as $category)
                        <li>
                            <span class="category">{{ $category->name }}</span>
                            <ul class="subcategory-list">
                                @foreach ($category->subcategories as $subcategory)
                                    <li>
                                        <a href="{{ route('subcategory.products', ['id' => $subcategory->id]) }}" class="subcategory-link">
                                            {{ $subcategory->subcategory_name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Product Section -->
        <div class="col-lg-9 col-md-10 col-sm-12">
            <div class="container">

                @foreach ($products as $item)
                <div class="product-card">
                    <div class="card-image">
                        <a href="{{ route('product.details', [$item->id]) }}">
                            <img src="{{ asset('/storage/' . $item->image) }}" alt="{{ $item->name }}">
                        </a>
                    </div>
                    <div class="card-overlay">
                        <h3 class="product-title">{{ $item->name }}</h3>
                        <div class="card-buttons">
                            <button class="price-btn">${{ $item->discount_price }}</button>
                            <!-- Updated Button to pass data to the modal -->
                            <button class="cart-btn" onclick="openSizeModal('{{ $item->id }}', '{{ $item->name }}', '{{ $item->discount_price }}', '{{ asset('/storage/' . $item->image) }}')">
                                <i class="fa fa-cart-plus"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

<!-- Modal for Size Selection -->
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
              <button type="submit" class="btn btn-success w-100">Confirm Size</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<script>
    let currentProduct = {};

    // Function to open the modal and set product data dynamically
    function openSizeModal(productId, productName, productPrice, productImage) {
        // Store the product data for later use
        currentProduct = { id: productId, name: productName, price: productPrice, image: productImage };

        // Set product name in the modal (optional)
        document.getElementById('productSizeModalLabel').innerText = `Choose Size for ${productName}`;

        // Show the modal
        var sizeModal = new bootstrap.Modal(document.getElementById('productSizeModal'));
        sizeModal.show();
    }

    // Handle form submission to add product to the cart
    document.getElementById('productSizeForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent form submission
               
        const size = document.getElementById('productSize').value;

        alert(size);
        alert("Product ID: " + currentProduct.id);
        if (size) {
            // Trigger addToCart with the selected size and current product data
            addToCart(currentProduct.id, currentProduct.name, currentProduct.price, currentProduct.image, size);
            
            // Close the modal after adding to the cart
            var sizeModal = bootstrap.Modal.getInstance(document.getElementById('productSizeModal'));
            sizeModal.hide();
        } else {
            alert("Please select a size");
        }
    });
</script>

@endsection
