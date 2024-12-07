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
                        
                        <!-- Button to open modal -->
                        <button class="cart-btn"
                            onclick="openSizeModal(
                                '{{ $item->id }}', 
                                '{{ addslashes($item->name) }}', 
                                '{{ $item->discount_price }}', 
                                '{{ asset('/storage/' . $item->image) }}', 
                                {{ json_encode($item->colors) }}, 
                                {{ json_encode($item->sizes) }}
                            )">
                            <i class="fa fa-cart-plus"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


<!-- Modal for Size Selection -->
<div class="modal fade" id="productSizeModal" tabindex="-1" aria-labelledby="productSizeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productSizeModalLabel">Choose Options</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="productSizeForm">
                    <!-- Dynamic Sizes -->
                    <div class="mb-3">
                        <label for="productSize" class="form-label">Available Sizes</label>
                        <select class="form-select" id="productSize" name="size" required>
                            <option value="" selected disabled>Select a size</option>
                            <!-- Sizes will be dynamically populated -->
                        </select>
                    </div>

                    <!-- Dynamic Colors -->
                    <div class="mb-3">
                        <label for="productColor" class="form-label">Available Colors</label>
                        <select class="form-select" id="productColor" name="color" required>
                            <option value="" selected disabled>Select a color</option>
                            <!-- Colors will be dynamically populated -->
                        </select>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success w-100">Confirm Options</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>



let currentProduct = {};

function openSizeModal(productId, productName, productPrice, productImage, colors, sizes) {
    // Store the current product data
    currentProduct = { id: productId, name: productName, price: productPrice, image: productImage };

    // Set the product name in the modal
    document.getElementById('productSizeModalLabel').innerText = `Choose Options for ${productName}`;

    // Populate the sizes dropdown
    const sizeDropdown = document.getElementById('productSize');
    sizeDropdown.innerHTML = '<option value="" selected disabled>Select a size</option>';
    sizes.forEach(size => {
        const option = document.createElement('option');
        option.value = size;
        option.textContent = size;
        sizeDropdown.appendChild(option);
    });

    // Populate the colors dropdown
    const colorDropdown = document.getElementById('productColor');
    colorDropdown.innerHTML = '<option value="" selected disabled>Select a color</option>';
    colors.forEach(color => {
        const option = document.createElement('option');
        option.value = color;
        option.textContent = color;
        colorDropdown.appendChild(option);
    });

    // Show the modal
    const sizeModal = new bootstrap.Modal(document.getElementById('productSizeModal'));
    sizeModal.show();
}

// Handle form submission to add product to the cart
document.getElementById('productSizeForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent the default form submission

    const size = document.getElementById('productSize').value;
    const color = document.getElementById('productColor').value;

    if (size && color) {
        alert(`Product ID: ${currentProduct.id}\nSize: ${size}\nColor: ${color}`);

        // Call your addToCart function with the selected options
        addToCart(currentProduct.id, currentProduct.name, currentProduct.price, currentProduct.image, size, color);

        // Close the modal after adding to the cart
        const sizeModal = bootstrap.Modal.getInstance(document.getElementById('productSizeModal'));
        sizeModal.hide();
    } else {
        alert("Please select both size and color.");
    }
});

function addToCart(productId, productName, productPrice, productImage, size, color) {
    // Example: Log the cart data (replace with actual cart logic)
    console.log("Adding to cart:", { productId, productName, productPrice, productImage, size, color });
}

</script>

@endsection