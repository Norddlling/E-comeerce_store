<div {{ $attributes->merge(['class' => '' ])}}>
    <form method="POST" action="{{ route('basket.store', ['product' => $product]) }}">
        @csrf
        @if ($product->quantity_of_product > 0)
            <input 
            {{ $attributes->merge(['type' => 'hidden']) }}
                value="1"
                id="quantity_of_product_buying" 
                name="quantity_of_product_buying" 
            />
            <x-e-shop-front.button type="submit" class="">
                <i class="material-icons pt-1">add_shopping_cart</i>
            </x-e-shop-front.button>
        @else
            Product unavailable
        @endif
    </form>
</div>