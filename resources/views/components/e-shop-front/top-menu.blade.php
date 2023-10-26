<div class="container-fluid">
    <div class="w-100 d-inline-block">
        <div class="container-fluid">
            <div class="w-25 d-inline-block">
                Product categories
            </div>
            <x-e-shop-front.products-search-field/>
            <x-e-shop-front.button onclick="window.location='{{ route('basket.index') }}'" class="float-end">
                Basket
            </x-e-shop-front.button>
        </div>
    </div>
    <x-e-shop-front.category-menu :categories="$categories"/>
</div>