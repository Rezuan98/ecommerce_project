<div class="super_class">



    <div class="common_container">

        <div class="category-3-container">

            @foreach ($card_2 as $card_item_2)
                
            <div class="category-3-card">
                <img src="{{ asset('/storage/' .$card_item_2->icon) }}" alt="Custom T-Shirt" class="category-image">
                <h3 class="category-3-title">{{ $card_item_2->name }}</h3>
            </div>


            @endforeach
            
          
           
        </div>
        
    </div>
</div>