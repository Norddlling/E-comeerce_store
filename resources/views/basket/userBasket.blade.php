<x-app-layout>
    <div>
        <section>
            <x-e-shop-front.opened-top-menu :categories="$categories">
                <div></div>
            </x-e-shop-front.opened-top-menu>
        </section>
        <div>{{ session('shoping_status_message') }}</div>
        <div>
            @if (count(session('baskets', [])) > 0 || $baskets->count() > 0)
                @if($baskets->count() > 0)
                    @auth
                        @foreach ($baskets as $basket)
                            <div class="my-1">
                                {{ $basket->product_name }} Price: {{ $basket->price }}
                                <div class="d-inline-block">
                                    <input
                                        type="number"
                                        class="rounded"
                                        name="quantity_of_products_in_basket"
                                        min="1"
                                        @foreach ($products as $product)
                                            @if($product->product_name === $basket->product_name) 
                                                max="{{ $product->quantity_of_product }}"                          
                                            @endif
                                        @endforeach
                                        value="{{ $basket->quantity_of_product_buying }}"
                                    />
                                </div>
                                <form method="POST" action="{{ route('basket.destroy', $basket->id) }}" class="d-inline-block">
                                    @method('delete')
                                    @csrf
                                    <x-e-shop-front.delete-button/>
                                </form>
                            </div>
                        @endforeach
                        <div>
                            <form method="POST" action="{{ route('basket.buyProducts') }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Buy all" class="btn btn-outline-primary"/>
                            </form>
                        </div>
                    @endauth
                @elseif (count(session('baskets', [])) > 0 && $baskets->count() === 0)
                        @if (!auth()->user())
                            @foreach(session('baskets', []) as $sessionBasket)
                                <div class="my-1">
                                    <div class="d-inline-block">
                                        {{ $sessionBasket['product_name'] }} Price: {{ $sessionBasket['price'] }}
                                        <input
                                            type="number"
                                            class="rounded"
                                            name="quantity_of_products_in_sessionBasket"
                                            min="1"
                                            @foreach ($products as $product)
                                                @if($product->product_name ===  $sessionBasket['product_name']) 
                                                    max="{{ $product->quantity_of_product }}"                       
                                                @endif
                                            @endforeach
                                            value="{{ $sessionBasket['quantity_of_product_buying'] }}"
                                    />
                                    </div>
                                    <form method="POST" action="{{ route('basket.destroySession', $sessionBasket['product_name']) }}" class="d-inline-block">
                                        @csrf
                                        <x-e-shop-front.delete-button/>
                                    </form>
                                </div>
                            @endforeach
                            <div>
                                <form method="POST" action="{{ route('basket.buyProductsWithoutAuth') }}">
                                    @csrf
                                    <input type="submit" value="Buy all" class="btn btn-outline-primary"/>
                                </form>
                            </div> 
                        @else
                            <div>Basket is empty</div>
                        @endif
                @endif
            @else
                <div>Basket is empty</div>
            @endif
        </div>  
    </div>
</x-app-layout>