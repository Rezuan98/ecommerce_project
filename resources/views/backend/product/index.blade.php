@extends('backend.master.master')

@section('backend-contents')
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh; margin-left:100px;margin-top:80px;">
        <div class="col-lg-10 col-md-12">
            <div class="card">
                <div class="card-header bg-light d-flex justify-content-between">
                    <h4 class="card-title">Product List</h4>
                    <a href="{{ route('create.product') }}" class="btn btn-info">Add New Product</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-primary" role="alert">
                            {{ session('success') }}
                        </div>
                        <br>
                    @endif
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Sub-Category</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Colors</th>
                                <th scope="col">Sizes</th>
                                <th scope="col">Price</th>
                                <th scope="col">Discount Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $product)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category->name ?? 'No category' }}</td>
        <td>{{ $product->subcategory->subcategory_name ?? 'No sub-category' }}</td>
        <td>{{ $product->brand->name ?? 'No brand' }}</td>
        <td>{{ !empty($product->colors) ? implode(', ', $product->colors) : 'No color' }}</td>
        <td>{{ !empty($product->sizes) ? implode(', ', $product->sizes) : 'No size' }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->discount_price }}</td>
        <td>
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="width: 50px; height: 50px;">
            @else
                <span>No image</span>
            @endif
        </td>
        <td><a class="btn btn-outline-info btn-sm" href="{{ route('duplicate.product', $product->id) }}">Duplicate</a>
            <a class="btn btn-outline-primary btn-sm" href="{{ route('edit.product', $product->id) }}">Edit</a>
            <a class="btn btn-outline-danger btn-sm" href="{{ route('delete.product', $product->id) }}" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
@endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
