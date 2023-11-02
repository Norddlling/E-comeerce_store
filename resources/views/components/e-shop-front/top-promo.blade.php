<div id="demo" class="carousel slide" data-bs-ride="carousel" {{ $attributes->merge(['class' => '' ])}}>

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner rounded-2 shadow">
      <div class="carousel-item active">
        <img src="/storage/promo_images/top-promo/sale-1.jpg" alt="Sale 1" class=" rounded-2 w-100" >
      </div>
      <div class="carousel-item">
        <img src="/storage/promo_images/top-promo/sale-2.jpg" alt="Sale 2" class=" rounded-2 w-100" >
      </div>
      <div class="carousel-item">
        <img src="/storage/promo_images/top-promo/sale-3.jpg" alt="Sale 3" class=" rounded-2 w-100" >
      </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>