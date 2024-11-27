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
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" required>
                        </div>

                        <!-- Description -->
                        <div class="form-group mt-3">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter product description"></textarea>
                        </div>

                        <!-- Price -->
                        <div class="form-group mt-3">
                            <label for="price">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter product price" required>
                        </div>

                        <!-- Discount Price -->
                        <div class="form-group mt-3">
                            <label for="discount_price">Discount Price</label>
                            <input type="number" step="0.01" class="form-control" id="discount_price" name="discount_price" placeholder="Enter discount price">
                        </div>

                        <!-- Stock Quantity -->
                        <div class="form-group mt-3">
                            <label for="stock_quantity">Stock Quantity</label>
                            <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" placeholder="Enter stock quantity" required>
                        </div>

                        <!-- Category -->
                        <div class="form-group mt-3">
                            <label for="category_id">Category</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <option value="" selected disabled>Select a category</option>
                                @foreach($category as $categories)
                                    <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group mt-3">
                            <label for="subcategory_id">Sub-Category</label>
                            <select class="form-select" id="subcategory_id" name="subcategory_id">
                                <option value="" selected disabled>Select a sub-category</option>
                                <!-- Subcategories will be dynamically loaded here -->
                            </select>
                        </div>
                        
                        

                        <!-- Brand -->
                        <div class="form-group mt-3">
                            <label for="brand_id">Brand</label>
                            <select class="form-select" id="brand_id" name="brand_id">
                                <option value="" selected disabled>Select a brand</option>
                                @foreach($brand as $brands)
                                    <option value="{{ $brands->id }}">{{ $brands->name }}</option>
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
@endsection


