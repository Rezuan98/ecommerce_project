<div class="super_class">



    <div class="common_container">

        <div class="category-7-container"> 
            <div class="category-7-item1"><a href="{{ route('product.details', ['id' => $display_3->id]) }}"><img src="{{ asset('/storage/' . $display_3->icon) }}" alt="Product 2" class="product-image">
                <span class="category-7_name">{{ $display_3->name??'null' }}</span></a></div>
        
                @foreach ($display_3_products as $category)
    @foreach ($category->product as $item3)
        <div class="category-7-item">
            <a href="{{ route('product.details', ['id' => $item3->id]) }}">
                <img src="{{ asset('/storage/' . ($item3->image ?? '')) }}" alt="Product 2" class="product-image">
                <span class="category-7_name">
                    {{ $item3->discount_price ?? '' }}
                    <del style="color: red">{{ $item3->price ?? '' }}</del>
                </span>
            </a>
        </div>
    @endforeach
@endforeach

                
        
              
        </div>
        
    </div>
</div>