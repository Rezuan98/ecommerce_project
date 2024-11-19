<div class="super_class">

    <div class="common_container">
        {{-- <div class="slider-container mb-5">
            <div class="slider">
                <div class="slide">
                    
                    <div class="slide"> <img src="{{ asset('product_images/p5.jpg') }}" alt="Slide 1"></div> 
                    <div class="slide"><img src="{{ asset('product_images/p6.jpg') }}" alt="Slide 2"></div>
                    <div class="slide"><img src="{{ asset('product_images/p7.jpg') }}" alt="Slide 3"></div>
                    <div class="slide"> <img src="{{ asset('product_images/p5.jpg') }}" alt="Slide 1"></div> 
                    <div class="slide"><img src="{{ asset('product_images/p6.jpg') }}" alt="Slide 2"></div>
                    <div class="slide"><img src="{{ asset('product_images/p7.jpg') }}" alt="Slide 3"></div>
                
                
                
                </div>

            </div>
            <!-- Navigation buttons -->
            <button class="prev" onclick="changeSlide(-1)">❮</button>
            <button class="next" onclick="changeSlide(1)">❯</button>
        </div> --}}
   
        <div class="slider-container">
            <button class="arrow left" id="left-arrow">◀</button>
            <div class="slider-wrapper">
              <div class="slider" id="slider">
                <!-- Single row of logos -->
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 1"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 2"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 3"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 4"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 5"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 6"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 7"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 8"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 1"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 2"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 3"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 4"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 5"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 6"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 7"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 8"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 1"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 2"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 3"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 4"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 5"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 6"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 7"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 8"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 1"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 2"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 3"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 4"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 5"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 6"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 7"></div>
                <div class="logo"><img src="{{ asset('product_images/logo.png') }}" alt="Logo 8"></div>
                <!-- Add more logos as needed -->
              </div>
            </div>
            <button class="arrow right" id="right-arrow">▶</button>
        
    </div>
</div>

{{-- 
<div class="slider-container">
    <button class="arrow left" id="left-arrow">◀</button>
    <div class="slider-wrapper">
      <div class="slider" id="slider">
        <!-- Columns of logos -->
        <div class="column">
          <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
          <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
          <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
          <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
          <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
          <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
          
        </div>
        <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
          <div class="column">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 1">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 2">
            <img src="{{ asset('product_images/logo.png') }}" alt="Logo 3">
            
          </div>
       
      </div>
    </div>
    <button class="arrow right" id="right-arrow">▶</button>
  </div> --}}