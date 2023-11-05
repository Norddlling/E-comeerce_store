<div {{ $attributes->merge(['class' => 'opened-top-description' ])}}>
    <div class="opened-container">
        <img 
            src = "{{ '/storage/products_images/'.$product->product_image }}" 
            alt = "{{ $product->product_name }} image" 
            width = "300"
            class = "shadow rounded-2"
            style="width: 100%;"
        />
    </div>
    <div class="opened-container p-3" >
        <div class="my-2 fs-1">
            <h1>{{ $product->product_name }}</h1>
        </div>
        <div class="my-2 ">
            price: <span class="fs-4">{{ $product->price }}</span>
        </div>
        <div class="my-2">
            <x-e-shop-front.star-rating :product="$product"/> 
        </div>
        <div class="my-2">
            <x-e-shop-front.buy-button :product="$product" type="number" max="{{ $product->quantity_of_product }}" min="1" class="d-inline-block shadow rounded-2" style="border: none;"/>
        </div>
        <div class="my-2">
            {{ $product->quantity_of_product }} available
        </div>
        @auth
            <div class="my-2 mt-4">
                <x-e-shop-front.rate-product :product="$product" :ratings="$ratings"/> 
            </div>
        @endauth
    </div>
</div>

<style>
    .opened-top-description {
        display: flex;
        flex-direction: row;
    }

    .opened-container {
        width: 50%;
    }

    @media screen and (max-width: 768px) {
        .opened-container {
            width: 100%;
        }

        .opened-top-description {
            flex-direction: column;
        }
    }
    
</style>