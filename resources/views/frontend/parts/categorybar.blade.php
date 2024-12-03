<div class="super_class">

    <div class="common_container">
     



        <div class="categorybar_container" >

  <div class="category-item"><a style="text-decoration:none;color:white;" href="{{ route('all.product') }}">Shop Now</a></div>
            @foreach ($catagory_bar as $item)
                
           
          
            <div class="category-item"><a style="text-decoration:none;color:white;" href="{{ route('products',$item->id) }}">{{ $item->name }} </a></div>
           
            @endforeach
            <div class="category-item app">Get 5% Off App</div>
            <div class="category-item app" >Appstore</div>
        </div>



    </div>





</div>


