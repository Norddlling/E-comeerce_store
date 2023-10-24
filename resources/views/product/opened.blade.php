<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div>{{ session('basket_status_message') }}</div>
        <div>
            <img 
                src = "{{ '/storage/products_images/'.$product->product_image }}" 
                alt = "{{ $product->product_name }} image" 
                width = "300"
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
            users_raiting: 
        </div>

        @php
            $averageRating = $product->ratings->avg('users_raiting');
        @endphp

        <p>Average Rating: {{ $averageRating }} stars</p>

        @if ($averageRating)
            <div class="ratings">
                @for ($i = 1; $i <= 5; $i++)
                    @if ($i <= $averageRating)
                        <i class="fas fa-star">full</i>
                    @else
                        <i class="far fa-star">empty</i>
                    @endif
                @endfor
            </div>
        @else
            <i class="fas fa-star">full</i>
            <i class="fas fa-star">full</i>
            <i class="fas fa-star">full</i>
            <i class="far fa-star">empty</i>
            <i class="far fa-star">empty</i>
        @endif
        
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
    </div>
</body>
</html>