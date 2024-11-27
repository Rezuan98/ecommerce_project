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
                            <button class="cart-btn" onclick="addToCart('{{ $item->id }}', '{{ $item->name }}', '{{ $item->discount_price }}', '{{ asset('/storage/' . $item->image) }}')">
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
</div>

@endsection
