@extends('frontend.master.master')

@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Section -->
        <div class="col-lg-3 col-md-2 d-none d-md-block m-0 p-0" style="height: 1000px;">
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

                

                @foreach ($subcategory_products as $subcategory)
                @foreach ($subcategory->product as $product)
                    <div class="product-card">
                        <div class="card-image">
                            <a href="{{ route('product.details',['id' => $product->id]) }}"> <img src="{{ asset('/storage/' . ($product->image ?? 'default.jpg')) }}" alt="{{ $product->name ?? 'No Name' }}">
                            </a>
                        </div>
                        <div class="card-overlay">
                            <h3 class="product-title">{{ $product->name ?? 'No Name' }}</h3>
                            <div class="card-buttons">
                                <button class="price-btn">${{ $product->discount_price ?? 'N/A' }}</button>
                                <button class="cart-btn"><i class="fa-duotone fa-solid fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
            
            
                </div>
               
            </div>
        </div>
    </div>
</div>

@endsection
