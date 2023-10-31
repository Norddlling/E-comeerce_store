<div>
    <form method="POST" action="{{ route('basket.store', ['product' => $product]) }}">
        @csrf
        @if ($product->quantity_of_product > 0)
            <input 
                type="hidden" 
                id="quantity_of_product_buying" 
                name="quantity_of_product_buying" 
                value="1"
            />
            <x-e-shop-front.button type="submit" class="btn btn-outline-primary">
                <i class="material-icons pt-1">add_shopping_cart</i>
            </x-e-shop-front.button>
        @else
            Product unavailable
        @endif
    </form>
</div>