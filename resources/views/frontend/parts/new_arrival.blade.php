<div class="super_class">
    <div class="common_container">
        <div class="headcontainer" style="background-color:#ababed; text-align:center;  padding:50px;">
            <h2>{{ $text1->banner_head }}</h2>
        </div>
    </div>
</div>


    <div class="super_class">

      <div class="common_container">
        <div class="new-arrival-container">

            @foreach ($category as $item)
            <div class="new-arrival-card">
                <a href="{{ route('products',[$item->id]) }}" class="link-button">
                    @if($item->icon)
                    <img src="{{ asset('storage/'. $item->icon) }}" alt="{{ $item->name }}" class="product-image" >
                @else
                    <span>No image</span>
                @endif
                    <span class="new_arrival_name">{{ $item->name }}</span>
                </a> 
            </div>
        @endforeach
           
            
            
            
            
            <!-- Add more product cards as needed -->
        </div>

      </div>

    </div>

