<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-app-layout>
        <div>{{ session('basket_status_message') }}</div>
        <section>
            <x-e-shop-front.opened-top-menu :categories="$categories" />
        </section>
        <div>
            <img 
                src = "{{ '/storage/products_images/'.$product->product_image }}" 
                alt = "{{ $product->product_name }} image" 
                width = "300"
                style="width: 60%;"
            />
        </div>
        <div>
            product_name: {{ $product->product_name }}
        </div>
        <div>
            category: {{ $product->category }}
        </div>
        <div>
            quantity_of_product: {{ $product->quantity_of_product }} available
        </div>
        <div>
            price: {{ $product->price }}
        </div>
        <div>
            product_characteristics: {{ $product->product_characteristics }}
        </div>
        <div>
            description: {{ $product->description }}
        </div>

        <div>
            <x-e-shop-front.star-rating :product="$product"/>
        </div>
        
        <form method="POST" action="{{ route('product.rateProduct', ['product' => $product]) }}">
            @csrf
            <input type="number" min="0" max="5" id="users_raiting" name="users_raiting"/>
            <input type="submit" value="rate prodduct"/>
        </form>

        <form method="POST" action="{{ route('basket.store', ['product' => $product]) }}">
            @csrf
            @if ($product->quantity_of_product > 0)
                <input 
                    type="number" 
                    id="quantity_of_product_buying" 
                    name="quantity_of_product_buying" 
                    max="{{ $product->quantity_of_product }}" 
                    min="1" 
                    value="1"
                />
                <input type="submit" value="Buy"/>
            @else
                Product unavailable
            @endif
        </form>
    </x-app-layout>
</body>
</html>