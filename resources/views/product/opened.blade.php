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
            product_characteristics: {{ $product->product_characteristics }}
        </div>
        <div>
            description: {{ $product->description }}
        </div>
        <div>
            users_raiting: {{ $product->users_raiting }}
        </div>
        <form method="POST" action="{{ route('basket.store', ['product' => $product]) }}">
            @csrf
            <input 
                type="number" 
                id="quantity_of_product_buying" 
                name="quantity_of_product_buying" 
                max="{{ $product->quantity_of_product }}" 
                min="1" 
                value="1"
            />
            <input type="submit"/>
        </form>
    </div>
</body>
</html>