<div class="super_class">



    <div class="common_container">

        <div class="category-4-container"> 

           
                
           
    @foreach ($products as $product_item)
    @foreach ($product_item->product as $small_product_item )
    
            <div class="category-4-card">
                <a href="{{ route('product.details', ['id' => $small_product_item->id]) }}" class="link-button">
                <img src="{{ asset('/storage/' .$small_product_item->image) }}" alt="Product 1" class="product-image">
                <span class="category-4-name">{{ $small_product_item->discount_price }} <del style="color: red">{{ $small_product_item->price }}</del> </span></a> 
            </div>
            @endforeach
            @endforeach
        </div>
    </div>
</div>