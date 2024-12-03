<div class="super_class">



    <div class="common_container">

        <div class="category-2-container">
            <div class="item1"><a href="{{ route('products', ['id' => $display_2->id]) }}"><img src="{{ asset('/storage/' .optional($display_2)->icon ?? 'null') }}" alt="Product 2" class="product-image">
                <span class="category-2_name">{{ $display_2->name??'null' }}</span></a></div> <!-- Spans 2 columns and 2 rows -->
            
            
            @foreach ($display_2_product as $item)
            <div class="item2" class="category-2"><a href="{{ route('product.details', ['id' => $display_2->id]) }}"><img src="{{ asset('/storage/'.$item->image??'null') }}" alt="Product 2" class="product-image">
                <span class="category-2_name">TK:{{ $item->discount_price??'null' }}  <del style="color: red">{{ $item->price??'null' }}</del> </span></a></div>
            @endforeach
                
            
        </div>
        
    </div>
</div>