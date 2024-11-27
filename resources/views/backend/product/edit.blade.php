@extends('backend.master.master')

@section('backend-contents')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh; margin-left:100px; margin-top:100px;">
        <div class="col-lg-10 col-md-12">
            <div class="card">
                <div class="card-header bg-secondary d-flex justify-content-between">
                    <h4 class="card-title">Edit Product</h4>
                    <a href="{{ route('index.product') }}" class="btn btn-info">Back to Product List</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                        <br>
                    @endif

                    <form action="{{ route('update.product', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Product Name -->
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                        </div>

                        <!-- Description -->
                        <div class="form-group mt-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4">{{ $product->description }}</textarea>
                        </div>

                        <!-- Price -->
                        <div class="form-group mt-3">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
                        </div>

                        <!-- Discount Price -->
                        <div class="form-group mt-3">
                            <label for="discount_price">Discount Price</label>
                            <input type="number" step="0.01" class="form-control" id="discount_price" name="discount_price" value="{{ $product->discount_price }}">
                        </div>

                        <!-- Stock Quantity -->
                        <div class="form-group mt-3">
                            <label for="stock_quantity">Stock Quantity</label>
                            <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" value="{{ $product->stock_quantity }}" required>
                        </div>

                        <!-- Category -->
                        <div class="form-group mt-3">
                            <label for="category_id">Category</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <option value="" disabled>Select a category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Sub-Category -->
                        <div class="form-group mt-3">
                            <label for="subcategory_id">Sub-Category</label>
                            <select class="form-select" id="subcategory_id" name="subcategory_id">
                                <option value="" disabled>Select a sub-category</option>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}" {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>{{ $subcategory->subcategory_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Brand -->
                        <div class="form-group mt-3">
                            <label for="brand_id">Brand</label>
                            <select class="form-select" id="brand_id" name="brand_id">
                                <option value="" disabled>Select a brand</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Product Image -->
                        <div class="form-group mt-3">
                            <label for="image">Product Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                            @if($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="width: 100px; height: 100px; margin-top: 10px;">
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
