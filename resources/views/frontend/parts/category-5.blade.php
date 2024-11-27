<div class="super_class">



    <div class="common_container">

        <div class="category-5-container">
            @foreach ($card_3 as $card_item_3)
                
           
            <div class="category-5-card">
                <img src="{{ asset('/storage/' .$card_item_3->icon) }}" alt="Custom T-Shirt" class="category-image">
                <h3 class="category-5-title">{{ $card_item_3->name  }}</h3>
            </div>
            @endforeach
        </div>
    </div>
</div>