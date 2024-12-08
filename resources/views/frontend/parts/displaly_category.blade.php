
<div class="super_class">

    <div class="common_container">
        <div class="display-category-container">
            @if ($display_1)
                <div class="display-category-items items1">
                    <a href="{{ route('products', ['id' => $display_1->id]) }}">
                        <img src="{{ asset('storage/' . $display_1->icon) }}" alt="Product 2" class="product-image">
                        <span class="display-category-title">{{ $display_1->name }}</span>
                    </a>
                    
                </div>
               
               
            @else
                <div class="display-category-items items1">
                    <p>There are no Products or Category in Display-1</p>
                </div>
            @endif
            @if($display_1_product)

            @foreach ($display_1_product as $item)
            <div class="display-category-items items2"><a href="{{ route('product.details',['id' => $item->id]) }}"><img src="{{ asset('storage/' . $item->image) }}" alt="Product 2" class="product-image">
                <span class="display-category-title">{{ $item->discount_price }} <del style="color: red">{{ $item->price??'' }}</del>  </span></a></div>
            @endforeach

            @else <div class="display-category-items items2">
                <p>There are no Products in Display-1</p>
            </div>

            @endif
        </div>
    </div>
    
</div>
