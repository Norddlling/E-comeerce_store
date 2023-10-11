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
        <div>
            @foreach(session('basket', []) as $basketItem)
                <div>{{ $basketItem['product_name'] }}</div>
            @endforeach
        </div>
        @foreach ($baskets as $basket)
            <div>
                {{ $basket->product_name }}
                <input
                    type="number"
                    name="quantity_of_products_in_basket"
                    min="1"
                    @foreach ($products as $product)
                        @if($product->product_name === $basket->product_name) 
                            max="{{ $product->quantity_of_product }}"
                        @else 
                            max="1"                            
                        @endif
                    @endforeach
                    value="{{ $basket->quantity_of_product_buying }}"
                />
                <form method="POST" action="{{ route('basket.destroy', $basket->id) }}">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete from basket"/>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>