@extends('backend.master.master')

@section('backend-contents')
<form action="{{ route('store.product') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="pcontainer" style="margin-top:80px; width:100%!important;">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 p-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Add New Product</h4>
                        <a href="{{ route('index.product') }}" class="btn btn-success">Product List</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <!-- Product Name -->
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter product name" value="{{ old('name') }}" required>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <!-- Description -->
                        <div class="form-group mt-3">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="2" placeholder="Enter product description">{{ old('description') }}</textarea>
                            @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <!-- Price -->
                        <div class="form-group mt-3">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Enter product price" value="{{ old('price') }}" required>
                            @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <!-- Category -->
                        <div class="form-group mt-3">
                            <label for="category_id">Category</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <option value="" selected disabled>Select a category</option>
                                @foreach($category as $categories)
                                    <option value="{{ $categories->id }}" @selected(old('category_id') == $categories->id)>{{ $categories->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Subcategory -->
                        <div class="form-group mt-3">
                            <label for="subcategory_id">Sub-Category</label>
                            <select class="form-select" id="subcategory_id" name="subcategory_id">
                                <option value="" selected disabled>Select a sub-category</option>
                                <!-- Subcategories will be dynamically loaded here -->
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="discount_price">Discount Price</label>
                            <input type="number" step="0.01" class="form-control" id="discount_price" name="discount_price" placeholder="Enter discount price">
                        </div>

                        <!-- Stock Quantity -->
                        <div class="form-group mt-3">
                            <label for="stock_quantity">Stock Quantity</label>
                            <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" placeholder="Enter stock quantity" required>
                        </div>
                        <!-- Brand -->
                        <div class="form-group mt-3">
                            <label for="brand_id">Brand</label>
                            <select class="form-select" id="brand_id" name="brand_id">
                                <option value="" selected disabled>Select a brand</option>
                                @foreach($brand as $brands)
                                    <option value="{{ $brands->id }}" @selected(old('brand_id') == $brands->id)>{{ $brands->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Color -->
                        <div class="form-group mt-3">
                            <label for="color_id">Color</label>
                            <select class="js-example-basic-multiple form-select" id="color_id" name="color_names[]" multiple>
                                <option value="" disabled>Select colors</option>
                                @foreach($color as $colors)
                                    <option value="{{ $colors->name }}" 
                                        @if(in_array($colors->id, old('color_id', []))) selected @endif>
                                        {{ $colors->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Size -->
                        <div class="form-group mt-3">
                            <label for="size_id">Size</label>
                            <select class="js-example-basic-multiple form-select" id="size_id" name="size_names[]" multiple>
                                <option value="" disabled>Select sizes</option>
                                @foreach($size as $sizes)
                                    <option value="{{ $sizes->size }}" 
                                        @if(in_array($sizes->id, old('size_id', []))) selected @endif>
                                        {{ $sizes->size }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Product Image -->
                        <div class="form-group mt-3">
                            <label for="image">Product Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                              





                        <!-- Submit Button -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
      

    $(document).ready(function () {
        // Trigger event when a category is selected
        $('#category_id').on('change', function () {
            let categoryId = $(this).val(); // Get selected category ID
            // Clear existing subcategory options and show loading
            $('#subcategory_id').html('<option value="" selected disabled>Loading...</option>');

            // Make AJAX request to fetch subcategories
            if (categoryId) {
                $.ajax({
                    url: "{{ route('fetch.subcategory') }}", // Laravel route for subcategory fetching
                    type: "GET",
                    data: { category_id: categoryId }, // Send selected category ID
                    success: function (data) {
                        let options = '<option value="" selected disabled>Select a sub-category</option>'; // Default option
                        
                        // Populate subcategories if available
                        if (data.subcategories.length > 0) {
                            data.subcategories.forEach(subcategory => {
                                options += `<option value="${subcategory.id}">${subcategory.subcategory_name}</option>`;
                            });
                        } else {
                            options = '<option value="" selected disabled>No sub-categories available</option>';
                        }
                        
                        // Update the subcategory dropdown
                        $('#subcategory_id').html(options);
                    },
                    error: function () {
                        alert('Error fetching subcategories. Please try again later.');
                    }
                });
            }
        });
    });


    </script>
@endsection
