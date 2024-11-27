<div class="super_class">
    <div class="common_container">
        <div class="socks-container">
            <div class="shocks-header">
        <h3>{{ $text2->banner_title }}</h3>
            </div>
            <div class="shocks-description">
                <h1>{{ $text2->banner_head }}</h1>
            </div>
            <div class="shocks-link">
                <h5>{{ $text2->banner_description }}<i class="fa-solid fa-arrow-right-long"></i></h5>
            </div>
        </div>
        
        <div class="category8-container">

            
               

            <div class="category8-item2">
                <a href="{{ route('product.details', ['id' => $display_4->id]) }}">
                    <img src="{{ asset('/storage/' . $display_4->icon) }}" alt="{{ $display_4->name }}" class="product-image">
                    <span class="category_8_name">{{ $display_4->name }}</span>
                </a>
            </div>

            <!-- Remaining Cards -->
            @foreach ($display_4_product as $display_4_products)
              
                    
                        <div class="category8-item3">
                            <a href="{{ route('product.details', ['id' => $display_4_products->id]) }}">
                                <img src="{{ asset('/storage/' . $display_4_products->image) }}" alt="{{ $display_4_products->name }}" class="product-image">
                                <span class="category_8_name">
                                    {{ $display_4_products->discount_price }}
                                    <del style="color: red">{{ $display_4_products->price }}</del>
                                </span>
                            </a>
                        </div>
                    
                @endforeach
           

        </div>
    </div>
</div>
