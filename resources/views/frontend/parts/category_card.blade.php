
<div class="super_class">

    <div class="common_container">

        <div class="category-card-container">
            @foreach ($card_1 as $card_item_1)
                
           
            <div class="category-container-card">
                <a href="{{ route('products',['id'=> $card_item_1->id]) }}"><img src="{{ asset('/storage/' . $card_item_1->icon) }}" alt="Custom T-Shirt" class="category-image"></a>
                <h3 class="category-card-title">{{ $card_item_1->name  }}</h3>
            </div>
            @endforeach
        </div>



    </div>
</div>




