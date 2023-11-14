
    <x-app-layout>
        <div>{{ session('basket_status_message') }}</div>
        <section>
            <x-e-shop-front.opened-top-menu :categories="$categories"/>
        </section>
        <div>
            <x-e-shop-front.opened-product-top-description :product="$product"  :ratings="$ratings"/>
        </div>
        <div>
            <x-e-shop-front.opened-product-bottom-description :product="$product"/>
        </div>
    </x-app-layout>