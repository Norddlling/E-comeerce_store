<div class="m-2">
    @foreach ( $products as  $product )
        <div class="d-inline-block card m-1 poduct-card shadow">
            <div onclick="window.location='{{ route('product.show', $product) }}'" >
                <div class="product-image-div">
                <img 
                    src = "{{ '/storage/products_images/'.$product->product_image }}" 
                    alt = "{{ $product->product_name }} image" 
                    width="300"
                    height="200"
                    class="card-img-top image rounded-2 product-image"
                />
                </div>
                <div class="card-body">
                    <div>
                    <div class="d-inline-block">
                        <div style="overflow: hidden;">{{ $product->product_name }}</div>
                        <x-e-shop-front.star-rating :product="$product"/>
                        <div>Price: {{ $product->price }}</div>
                    </div> 
                    <div class="d-inline-block float-end">
                        <x-e-shop-front.buy-button :product="$product"/>
                    </div>
                    </div>
                    <div class="text-secondary mt-1">
                        @auth
                            @if (auth()->user()->role === 'admin')
                                <div class="d-inline-block">
                                    <button 
                                        onclick="window.location='{{ route('product.edit', $product) }}'" 
                                        data-bs-toggle="tooltip" 
                                        data-bs-placement="right" 
                                        title="Eedit pdoduct">
                                        <i class="material-icons admin-icon-hover">edit</i>
                                    </button>
                                </div>

                                <div class="d-inline-block float-end">
                                    <form action={{ route('product.destroy', $product->id) }} method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit"
                                        data-bs-toggle="tooltip" 
                                        data-bs-placement="left"
                                        title="Delete pdoduct">
                                            <i class="material-icons admin-icon-hover">delete</i>
                                        </button>
                                    </form>
                                </div>
                            @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>

<style>
    .product-image {
        width: 100%;
        height: 18vw;
        object-fit: cover;
    }

    .admin-icon-hover:hover {
        color: black;
    }

    .poduct-card {
        width: 32%;
        
    }

    @media screen and (max-width: 860px) {
        .poduct-card {
            width: 48%;    
        }

        .product-image {
            height: 27vw;
        }
    }

    @media screen and (max-width: 576px) {
        .poduct-card {
            width: 99%;
            
        }

        .product-image {
            height: 56vw;
        }
    }
</style>