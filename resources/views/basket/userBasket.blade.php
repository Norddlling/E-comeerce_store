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
            @if (session()->has('baskets') || $baskets->count() > 0)
                @if($baskets->count() > 0)
                    @auth
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
                    @endauth
                @elseif (session()->has('baskets') && $baskets->count() === 0)
                        @if (!auth()->user())
                            @foreach(session('baskets', []) as $sessionBasket)    
                                <div>{{ $sessionBasket['product_name'] }} Quantity: {{ $sessionBasket['quantity_of_product_buying'] }}</div>
                                <form method="POST" action="{{ route('basket.destroySession', $sessionBasket['product_name']) }}">
                                    @csrf
                                    <input type="submit" value="Delete from basket"/>
                                </form>
                            @endforeach
                        @else
                            <div>Basket is empty</div>
                        @endif
                @endif
            @else
                <div>Basket is empty</div>
            @endif
        </div>        
    </div>
</body>
</html>